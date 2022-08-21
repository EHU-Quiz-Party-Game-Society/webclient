Echo.channel(`quiz`)
    .listen('.bingo', (data) => {
        showSheet(data);
    })

window.onload = function() {
    showSheet();
}

//Load fonts
const bingoFont = new FontFace('bingo', 'url(/fonts/bingo.ttf)');
bingoFont.load().then((font) => {
    document.fonts.add(font);
});
const sundayFont = new FontFace('sunday', 'url(/fonts/sunday.ttf)');
sundayFont.load().then((font) => {
    document.fonts.add(font);
});


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
                    let numbersCalledInLine = 0;

                    //Insert numbers for top row
                    for (let i2 = 0; i2 < bingoData[i].data.one.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.one[i2], x, y);
                        x += 49;

                        if(bingoData[i].data.one[i2] && bingo[bingoData[i].data.one[i2] - 1].called === 1) {
                            numbersCalledInLine++;
                            if(numbersCalledInLine === 5) {
                                drawCompleteLineIndicator(ctx, 30, y);
                            }
                        }
                    }

                    x = 38;
                    y += 50;
                    numbersCalledInLine = 0;
                    //Insert numbers for middle row
                    for (let i2 = 0; i2 < bingoData[i].data.two.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.two[i2], x, y);
                        x += 49;

                        if(bingoData[i].data.two[i2] && bingo[bingoData[i].data.two[i2] - 1].called === 1) {
                            numbersCalledInLine++;
                            if(numbersCalledInLine === 5) {
                                drawCompleteLineIndicator(ctx, 30, y);
                            }
                        }
                    }

                    x = 38;
                    y += 50;
                    numbersCalledInLine = 0;
                    //Insert numbers for bottom row
                    for (let i2 = 0; i2 < bingoData[i].data.three.length; i2++) {
                        insertNumber(ctx, bingo, bingoData[i].data.three[i2], x, y);
                        x += 49;

                        if(bingoData[i].data.three[i2] && bingo[bingoData[i].data.three[i2] - 1].called === 1) {
                            numbersCalledInLine++;
                            if(numbersCalledInLine === 5) {
                                drawCompleteLineIndicator(ctx, 30, y);
                            }
                        }
                    }


                    //Only calculate x away if there are lines provided, this prevents un-necessary processing at the start of the game
                    if(lines) {
                        awayCounter(bingoData[i], ctx, bingo, lines, bingoData[i].away, away_y);
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


function awayCounter(card, ctx, bingo, lines, away, away_y) {
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
    //16 is the number of numbers in a card (3x5) + 1 to account for arrays starting at 0.
    for(let i = 0; i < 16; i++) {
        if(card.data.one[i] && bingo[card.data.one[i] - 1].called === 1) {
            line_one--;
        }
        if(card.data.two[i] && bingo[card.data.two[i] - 1].called === 1) {
            line_two--;
        }
        if(card.data.three[i] && bingo[card.data.three[i] - 1].called === 1) {
            line_three--;
        }
    }

    if (lines === 1) {
        return Math.min(...[line_one, line_two, line_three]);
    } else if (lines === 2) {
        let away = [line_one, line_two, line_three];
        away.sort(function (x, y) {
            return x - y;
        });
        return Math.min(...[line_one, line_two, line_three]) + away[1];
    } else {
        let x = 15 - line_one - line_two - line_three;
        return 15 - x;
    }
}

function drawCompleteLineIndicator(ctx, x, y) {
    ctx.beginPath();
    //ctx.roundRect(x, y - 32, 440, 40, 10);
    ctx.rect(x, y - 32, 440, 40);
    ctx.fillStyle = "rgba(128, 128, 128, 0.5)";
    ctx.fill();
    ctx.lineWidth = 1;
    ctx.strokeStyle = '#808080';
    ctx.opacity = 0.5;
    ctx.stroke();
}
