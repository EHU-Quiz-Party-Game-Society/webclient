Echo.channel(`quiz`)
    .listen('.bingo', (data) => {
        showSheet(data);
    })

window.onload = function() {
    showSheet();
}

function showSheet(data) {
    console.log((new Date()).getHours() + ":" + (new Date()).getMinutes() + ":" + (new Date()).getSeconds());
    const url_string = window.location.href;
    const url = new URL(url_string);
    const sheet = url.searchParams.get("sheet");
    let lines = 0;

    if(data) {
        lines = parseInt(data.lines);
    } else {
        lines = parseInt(url.searchParams.get("line"));
    }

    jQuery.ajax({
        url: 'https://ehuquizsociety.com/api/bingo/',
    }).then(function (bingo) {
        jQuery.ajax({
            url: 'https://ehuquizsociety.com/api/bingo/sheet/' + sheet,
        }).then(function (bingoData) {
            console.log(bingoData);
            //Sort cards by x away
            if(lines) {
                for(let i = 0; i < 6; i++) {
                    bingoData[i]['away'] = calculateAway(bingoData[i], bingo, lines);
                }

                // sort by salary
                bingoData.sort(function (x, y) {
                    return x.away - y.away;
                });
            }

            const ctx = document.getElementById('bingo-canvas').getContext('2d');
            const img = new Image();
            img.onload = () => {
                ctx.drawImage(img, 0, 0);
                let x = 38; //X position of number
                let y = 63;
                let identifier_y = 20;
                let away_y = 192;

                for(let i = 0; i < bingoData.length; i++) {
                    //Add in Sheet Identifier
                    ctx.font = '20px sunday';
                    ctx.fillStyle = "white";
                    ctx.fillText("Sheet: " + bingoData[i].sheet, 50, identifier_y);
                    ctx.fillText("Code: " + bingoData[i].code, 350, identifier_y);
                    identifier_y += 201;

                    //Insert numbers for top row
                    for (let i2 = 0; i2 < bingoData[i].data.one.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.one[i2], x, y);
                        x += 49;
                    }

                    x = 38;
                    y += 50;
                    //Insert numbers for middle row
                    for (let i2 = 0; i2 < bingoData[i].data.two.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.two[i2], x, y);
                        x += 49;
                    }

                    x = 38;
                    y += 50;
                    //Insert numbers for middle row
                    for (let i2 = 0; i2 < bingoData[i].data.three.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.three[i2], x, y);
                        x += 49;
                    }

                    //Only calculate x away if there are lines provided, this prevents un-necessary processing at the start of the game
                    if(lines) {
                        awayCounter(bingoData[i], ctx, bingo, lines, away_y);
                    }

                    away_y += 201;
                    x = 38;
                    y += 101;
                }
            };
            img.src = '/images/BingoSheetBackground.png';
        });
    });
}

function insertNumber(ctx, bingo, value, x, y) {
    if(value && bingo[value - 1].called === 1) {
        ctx.beginPath();
        ctx.arc(x + 16, y - 12, 20, 0, 360, false);
        ctx.fillStyle = '#90ee90';
        ctx.fill();
        ctx.lineWidth = 1;
        ctx.strokeStyle = '#90ee90';
        ctx.stroke();
    }

    ctx.font = '35px bingo';
    ctx.fillStyle = "black";
    if(value != null) {
        if(value > 9) {
            ctx.fillText(value, x, y);
        } else {
            //For numbers 1-9, bump the number over to the right a bit
            ctx.fillText(value, x + 5, y);
        }

    }
}


function awayCounter(card, ctx, bingo, lines, away_y) {
    let away = calculateAway(card, bingo, lines);
    ctx.font = '20px sunday';
    ctx.fillStyle = "white";
    ctx.fillText(away + " away", 200, away_y);
}

function calculateAway(card, bingo, lines) {
    /** All lines have 5 numbers in them not counting spaces */
    let line_one = 5;
    let line_two = 5;
    let line_three = 5;

    //Go through each number in each line and check if it's been called. If so, subtract from the line count.
    for(let i = 0; i < 6; i++) {
        if(card.data.one[i] && bingo[card.data.one[i]].called === 1) {
            line_one--;
        }
        if(card.data.two[i] && bingo[card.data.two[i]].called === 1) {
            line_two--;
        }
        if(card.data.three[i] && bingo[card.data.three[i]].called === 1) {
            line_three--;
        }
    }

    if (lines === 1) {
        return Math.min(...[line_one, line_two, line_three]);
    } else if (lines === 2) {
        let away = [line_one, line_two, line_three];
        away.sort();
        return Math.min(...[line_one, line_two, line_three]) + away[1];
    } else {
        let x = 15 - line_one - line_two - line_three;
        return 15 - x;
    }
}
