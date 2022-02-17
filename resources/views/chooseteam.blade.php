@extends('layouts.live')
@section('title')
    Choose a team name!
@endsection
@section('content')
    <div id="logo" class="logo">
    <svg style="display: block; margin: auto" id="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="90%" viewBox="0, 0, 400,264.51612903225805"><g id="svgg"><path id="path0" d="M335.847 16.847 C 335.410 16.914,334.009 17.200,332.734 17.481 C 331.458 17.762,328.899 18.121,327.046 18.278 C 325.193 18.434,322.368 18.839,320.767 19.177 C 319.167 19.515,316.310 19.872,314.418 19.969 C 312.526 20.067,309.550 20.439,307.804 20.795 C 306.058 21.151,303.255 21.556,301.574 21.693 C 299.894 21.831,297.156 22.231,295.490 22.583 C 293.682 22.965,291.073 23.284,289.021 23.374 C 287.000 23.464,284.273 23.795,282.407 24.177 C 280.661 24.535,278.042 24.907,276.587 25.005 C 275.132 25.103,272.573 25.475,270.899 25.833 C 269.052 26.228,266.247 26.576,263.757 26.719 C 261.491 26.849,258.570 27.197,257.228 27.497 C 255.893 27.795,253.341 28.165,251.558 28.320 C 249.774 28.475,246.998 28.884,245.388 29.229 C 243.739 29.582,240.958 29.934,239.021 30.033 C 237.130 30.130,234.183 30.492,232.473 30.838 C 230.763 31.184,227.857 31.590,226.014 31.739 C 224.172 31.889,221.642 32.257,220.393 32.558 C 219.039 32.883,216.426 33.203,213.923 33.348 C 211.428 33.494,208.798 33.815,207.442 34.140 C 206.186 34.440,203.424 34.854,201.304 35.059 C 199.183 35.265,196.386 35.685,195.087 35.992 C 193.657 36.331,191.159 36.636,188.757 36.764 C 182.694 37.088,173.637 38.964,170.242 40.599 C 164.210 43.504,161.450 48.286,161.091 56.455 C 160.681 65.771,159.564 67.094,153.117 65.894 C 151.621 65.615,149.266 65.310,147.884 65.215 C 146.501 65.121,144.001 64.764,142.328 64.421 C 140.654 64.078,138.095 63.719,136.640 63.622 C 135.185 63.524,132.566 63.156,130.820 62.803 C 129.074 62.450,126.253 62.045,124.551 61.904 C 122.849 61.763,120.353 61.402,119.004 61.101 C 117.655 60.801,114.821 60.386,112.707 60.180 C 110.592 59.974,107.791 59.571,106.481 59.284 C 105.172 58.998,102.612 58.645,100.794 58.500 C 98.975 58.356,96.379 57.989,95.026 57.686 C 93.672 57.383,91.166 57.021,89.457 56.882 C 87.748 56.742,84.987 56.337,83.320 55.981 C 81.654 55.625,79.101 55.252,77.646 55.152 C 76.190 55.051,73.631 54.692,71.958 54.354 C 70.284 54.016,67.427 53.614,65.608 53.462 C 63.790 53.309,61.230 52.935,59.921 52.631 C 56.581 51.855,49.839 51.640,47.090 52.222 C 40.959 53.519,38.533 56.434,36.889 64.481 C 36.391 66.920,35.927 69.061,35.859 69.240 C 35.791 69.418,35.609 71.085,35.455 72.944 C 35.300 74.802,34.881 77.751,34.522 79.497 C 34.163 81.243,33.756 84.041,33.617 85.714 C 33.479 87.388,33.126 89.833,32.832 91.149 C 32.538 92.465,32.176 95.025,32.027 96.837 C 31.877 98.649,31.466 101.561,31.113 103.307 C 30.760 105.053,30.393 107.672,30.299 109.127 C 30.205 110.582,29.949 112.546,29.731 113.492 C 29.039 116.491,28.871 117.568,28.585 120.867 C 28.431 122.638,28.069 125.148,27.780 126.445 C 27.491 127.742,27.127 129.972,26.971 131.399 C 26.814 132.827,26.408 135.245,26.067 136.772 C 25.726 138.300,25.366 140.800,25.266 142.328 C 25.167 143.856,24.806 146.475,24.465 148.148 C 24.124 149.821,23.716 152.679,23.559 154.497 C 23.402 156.316,23.038 158.816,22.749 160.053 C 22.460 161.290,22.101 163.842,21.951 165.726 C 21.801 167.609,21.396 170.407,21.051 171.943 C 20.705 173.479,20.345 175.926,20.251 177.381 C 20.156 178.836,19.763 181.515,19.378 183.333 C 18.021 189.741,18.410 198.360,20.194 201.404 C 22.627 205.556,30.598 208.592,41.534 209.533 C 43.208 209.677,46.005 210.089,47.751 210.447 C 49.497 210.806,52.387 211.221,54.173 211.370 C 55.959 211.520,58.496 211.882,59.812 212.175 C 61.128 212.468,63.709 212.830,65.548 212.979 C 67.387 213.128,69.969 213.491,71.285 213.784 C 72.601 214.078,75.046 214.431,76.720 214.570 C 78.393 214.708,81.190 215.115,82.937 215.474 C 84.683 215.832,87.563 216.247,89.337 216.395 C 91.111 216.543,93.606 216.908,94.880 217.205 C 96.155 217.502,98.632 217.856,100.385 217.991 C 102.137 218.126,105.000 218.527,106.746 218.881 C 108.492 219.236,111.052 219.605,112.434 219.700 C 113.816 219.795,116.376 220.157,118.122 220.505 C 119.868 220.853,122.725 221.255,124.471 221.399 C 126.217 221.542,128.753 221.907,130.107 222.209 C 131.460 222.511,133.960 222.873,135.662 223.012 C 137.364 223.152,140.185 223.557,141.931 223.913 C 143.677 224.268,146.237 224.639,147.619 224.735 C 149.001 224.832,151.523 225.195,153.223 225.540 C 165.679 228.073,172.455 224.155,174.742 213.095 C 176.998 202.190,180.085 200.883,180.955 210.465 C 181.112 212.203,181.533 215.053,181.890 216.799 C 182.246 218.545,182.715 221.347,182.932 223.025 C 183.875 230.331,187.197 235.534,192.615 238.192 C 196.176 239.939,204.221 240.314,210.426 239.023 C 212.160 238.662,215.030 238.249,216.805 238.105 C 218.581 237.961,221.091 237.592,222.384 237.286 C 223.706 236.973,226.472 236.621,228.704 236.482 C 230.886 236.346,234.101 235.947,235.847 235.596 C 237.593 235.245,240.152 234.879,241.534 234.784 C 242.917 234.688,245.505 234.317,247.286 233.960 C 249.086 233.598,252.317 233.203,254.561 233.071 C 256.781 232.939,259.669 232.589,260.979 232.292 C 262.288 231.995,264.788 231.629,266.534 231.478 C 268.280 231.327,271.138 230.921,272.884 230.575 C 274.630 230.229,277.606 229.866,279.497 229.769 C 281.431 229.669,284.218 229.317,285.864 228.965 C 287.474 228.619,290.220 228.213,291.966 228.061 C 293.712 227.910,296.324 227.537,297.769 227.233 C 299.214 226.929,302.160 226.570,304.314 226.437 C 306.468 226.303,309.385 225.947,310.795 225.646 C 312.206 225.346,315.086 224.935,317.196 224.734 C 319.306 224.533,322.070 224.120,323.340 223.816 C 324.679 223.496,327.352 223.161,329.705 223.019 C 331.937 222.885,334.886 222.524,336.259 222.218 C 337.633 221.911,340.126 221.547,341.799 221.407 C 343.472 221.268,346.329 220.866,348.148 220.514 C 349.967 220.162,352.943 219.797,354.762 219.702 C 356.581 219.606,359.497 219.246,361.243 218.900 C 362.989 218.554,365.489 218.144,366.799 217.989 C 376.231 216.872,382.757 211.539,383.882 204.027 C 384.395 200.599,384.047 187.606,383.374 185.053 C 383.067 183.889,382.686 181.448,382.528 179.630 C 382.369 177.811,381.951 174.915,381.599 173.195 C 381.245 171.467,380.887 168.566,380.798 166.714 C 380.709 164.869,380.352 161.931,380.003 160.185 C 379.654 158.439,379.251 155.567,379.108 153.803 C 378.964 152.038,378.596 149.538,378.291 148.247 C 377.981 146.937,377.625 144.145,377.486 141.931 C 377.349 139.749,376.946 136.534,376.591 134.788 C 376.236 133.042,375.830 130.185,375.688 128.439 C 375.547 126.693,375.177 124.134,374.868 122.751 C 374.550 121.331,374.200 118.454,374.064 116.138 C 373.927 113.808,373.593 111.066,373.290 109.788 C 372.998 108.552,372.633 106.052,372.481 104.233 C 372.328 102.414,371.918 99.557,371.569 97.884 C 371.206 96.138,370.860 93.319,370.758 91.270 C 370.654 89.177,370.315 86.444,369.939 84.669 C 369.587 83.003,369.186 80.265,369.048 78.584 C 368.910 76.904,368.509 74.101,368.156 72.354 C 367.804 70.608,367.440 67.640,367.349 65.757 C 367.256 63.865,366.901 60.966,366.553 59.275 C 366.207 57.593,365.840 55.026,365.737 53.571 C 365.635 52.116,365.260 49.497,364.905 47.751 C 364.537 45.941,364.164 42.871,364.036 40.608 C 363.319 27.892,359.188 19.667,352.381 17.405 C 350.701 16.846,338.511 16.435,335.847 16.847 M345.809 31.890 C 347.374 32.989,348.315 34.940,348.678 37.831 C 348.833 39.067,349.241 41.508,349.586 43.254 C 349.930 45.000,350.292 47.619,350.391 49.074 C 350.490 50.529,350.854 53.088,351.200 54.762 C 351.545 56.435,351.951 59.649,352.101 61.905 C 352.251 64.160,352.609 67.022,352.895 68.265 C 353.182 69.508,353.539 72.035,353.689 73.881 C 353.838 75.726,354.206 78.340,354.506 79.690 C 354.806 81.039,355.164 83.953,355.302 86.166 C 355.442 88.430,355.837 91.554,356.203 93.309 C 356.562 95.025,356.978 97.857,357.128 99.603 C 357.278 101.349,357.641 103.849,357.935 105.159 C 358.229 106.468,358.581 109.385,358.717 111.641 C 358.854 113.919,359.214 116.859,359.526 118.255 C 359.835 119.637,360.202 122.165,360.342 123.873 C 360.481 125.582,360.882 128.379,361.232 130.090 C 361.583 131.801,361.998 134.689,362.155 136.508 C 362.312 138.327,362.680 140.827,362.973 142.063 C 363.273 143.330,363.613 146.104,363.751 148.413 C 363.890 150.735,364.277 153.890,364.644 155.688 C 365.000 157.434,365.373 160.053,365.471 161.508 C 365.569 162.962,365.932 165.522,366.276 167.195 C 366.620 168.869,366.980 171.726,367.076 173.545 C 367.172 175.364,367.534 178.340,367.879 180.159 C 368.225 181.978,368.626 184.813,368.769 186.460 C 368.913 188.107,369.343 190.964,369.725 192.809 C 371.401 200.893,369.278 203.767,361.251 204.280 C 359.064 204.419,356.204 204.774,354.894 205.068 C 353.585 205.363,350.787 205.765,348.677 205.962 C 346.567 206.160,343.770 206.573,342.460 206.880 C 341.030 207.216,338.442 207.530,335.979 207.667 C 333.623 207.798,330.835 208.129,329.427 208.446 C 328.078 208.750,325.459 209.124,323.607 209.279 C 321.754 209.433,318.988 209.843,317.460 210.190 C 315.789 210.568,313.312 210.887,311.243 210.990 C 309.352 211.084,306.376 211.446,304.630 211.795 C 302.884 212.144,300.003 212.548,298.228 212.693 C 296.453 212.837,293.894 213.206,292.540 213.513 C 291.163 213.825,288.330 214.172,286.107 214.302 C 283.745 214.439,280.902 214.797,279.096 215.184 C 277.425 215.542,274.570 215.961,272.751 216.117 C 270.933 216.272,268.433 216.646,267.196 216.949 C 265.820 217.285,263.355 217.588,260.847 217.727 C 258.467 217.860,255.691 218.192,254.233 218.519 C 252.851 218.828,250.291 219.201,248.545 219.347 C 246.799 219.493,243.988 219.895,242.299 220.241 C 240.610 220.587,237.693 220.947,235.818 221.042 C 233.942 221.136,230.979 221.499,229.233 221.848 C 227.487 222.197,224.579 222.603,222.770 222.751 C 220.962 222.898,218.462 223.265,217.215 223.567 C 215.968 223.869,213.399 224.219,211.508 224.346 C 209.616 224.473,206.878 224.657,205.423 224.754 C 199.147 225.175,197.030 222.865,196.556 215.079 C 196.425 212.910,196.041 209.922,195.673 208.201 C 195.316 206.528,194.943 203.968,194.845 202.513 C 194.746 201.058,194.371 198.499,194.012 196.825 C 193.608 194.948,193.269 192.212,193.126 189.683 C 192.988 187.243,192.675 184.671,192.353 183.333 C 192.055 182.097,191.685 179.597,191.531 177.778 C 191.378 175.959,190.967 173.042,190.618 171.296 C 190.269 169.550,189.906 166.574,189.810 164.683 C 189.707 162.670,189.373 160.061,189.004 158.393 C 188.657 156.825,188.253 154.087,188.106 152.308 C 187.960 150.530,187.551 147.646,187.199 145.899 C 186.845 144.148,186.485 141.195,186.394 139.313 C 186.304 137.436,185.991 134.817,185.697 133.492 C 185.403 132.168,184.993 129.341,184.784 127.210 C 184.576 125.078,184.156 122.221,183.852 120.860 C 183.537 119.452,183.240 116.962,183.163 115.079 C 183.086 113.208,182.741 110.303,182.368 108.387 C 182.006 106.526,181.606 103.669,181.479 102.038 C 181.353 100.408,180.952 97.705,180.589 96.032 C 180.188 94.182,179.858 91.589,179.749 89.418 C 179.647 87.388,179.303 84.591,178.953 82.937 C 178.614 81.336,178.212 78.598,178.059 76.852 C 177.906 75.106,177.486 72.189,177.124 70.370 C 176.763 68.552,176.464 66.468,176.460 65.741 C 176.455 65.013,176.274 63.238,176.057 61.796 C 174.949 54.450,176.260 52.755,183.544 52.112 C 185.188 51.966,187.629 51.603,188.968 51.304 C 190.307 51.006,192.771 50.647,194.444 50.506 C 196.118 50.366,198.915 49.964,200.661 49.612 C 202.407 49.261,205.324 48.896,207.143 48.801 C 208.962 48.707,211.878 48.341,213.624 47.988 C 215.370 47.635,218.228 47.228,219.974 47.084 C 221.720 46.939,224.577 46.536,226.323 46.187 C 228.069 45.838,230.985 45.477,232.804 45.385 C 234.623 45.292,237.480 44.934,239.153 44.589 C 240.827 44.244,243.327 43.881,244.709 43.783 C 246.091 43.686,248.651 43.312,250.397 42.954 C 252.178 42.589,255.313 42.199,257.540 42.067 C 259.722 41.937,262.621 41.582,263.982 41.279 C 265.343 40.976,268.200 40.557,270.331 40.348 C 272.463 40.140,275.290 39.729,276.614 39.435 C 277.938 39.142,280.558 38.828,282.434 38.738 C 284.317 38.648,287.270 38.287,289.021 37.933 C 290.767 37.581,293.679 37.170,295.491 37.021 C 297.303 36.872,299.863 36.506,301.179 36.208 C 302.495 35.910,305.357 35.559,307.540 35.428 C 309.802 35.291,312.873 34.905,314.683 34.529 C 316.429 34.166,319.226 33.756,320.899 33.617 C 322.573 33.479,325.072 33.113,326.454 32.805 C 327.836 32.497,330.812 32.130,333.068 31.991 C 335.324 31.851,337.943 31.569,338.889 31.363 C 341.804 30.731,344.445 30.931,345.809 31.890 M57.700 63.771 C 59.649 63.924,62.672 64.336,64.418 64.685 C 66.164 65.034,69.021 65.437,70.767 65.579 C 72.513 65.721,75.018 66.079,76.334 66.373 C 77.650 66.667,80.210 67.029,82.022 67.177 C 83.835 67.324,86.746 67.735,88.492 68.088 C 90.238 68.442,92.857 68.810,94.312 68.905 C 95.767 69.001,98.208 69.363,99.735 69.709 C 101.263 70.056,104.001 70.457,105.820 70.601 C 107.639 70.745,110.204 71.104,111.520 71.399 C 112.835 71.694,115.417 72.057,117.256 72.206 C 119.095 72.355,121.652 72.712,122.939 72.999 C 124.225 73.285,126.406 73.653,127.784 73.816 C 129.163 73.979,131.660 74.392,133.334 74.734 C 135.007 75.076,137.567 75.436,139.021 75.534 C 140.476 75.633,143.095 76.002,144.841 76.356 C 146.587 76.709,149.416 77.113,151.128 77.254 C 161.210 78.080,163.682 79.786,164.419 86.431 C 164.628 88.313,164.984 90.618,165.209 91.554 C 165.435 92.489,165.790 95.040,165.998 97.222 C 166.206 99.405,166.623 102.202,166.924 103.439 C 167.249 104.772,167.571 107.358,167.716 109.789 C 167.849 112.045,168.207 115.003,168.510 116.364 C 168.813 117.724,169.232 120.581,169.440 122.712 C 169.649 124.844,170.060 127.671,170.353 128.995 C 170.647 130.319,170.961 132.938,171.051 134.815 C 171.149 136.847,171.494 139.566,171.904 141.534 C 172.865 146.144,172.866 150.439,171.908 155.026 C 171.528 156.845,171.138 159.524,171.042 160.979 C 170.945 162.434,170.631 164.696,170.343 166.005 C 170.055 167.315,169.649 170.130,169.440 172.261 C 169.232 174.392,168.825 177.195,168.537 178.490 C 168.248 179.784,167.891 182.340,167.742 184.168 C 167.594 185.997,167.240 188.492,166.956 189.712 C 166.671 190.933,166.304 193.003,166.140 194.312 C 165.976 195.622,165.552 198.181,165.198 200.000 C 164.844 201.819,164.438 204.676,164.295 206.349 C 163.889 211.094,162.945 212.950,160.456 213.900 C 158.823 214.524,152.223 214.318,148.810 213.536 C 147.500 213.236,145.357 212.864,144.048 212.708 C 142.738 212.553,140.179 212.137,138.360 211.785 C 136.541 211.433,133.624 211.015,131.878 210.857 C 130.132 210.699,127.751 210.335,126.587 210.048 C 125.423 209.761,122.983 209.410,121.164 209.267 C 119.345 209.124,116.429 208.708,114.683 208.342 C 112.937 207.976,110.853 207.673,110.053 207.669 C 108.246 207.660,105.396 207.261,103.307 206.726 C 102.434 206.502,100.291 206.204,98.545 206.063 C 96.799 205.922,93.882 205.518,92.063 205.164 C 90.245 204.810,87.328 204.403,85.582 204.260 C 83.836 204.117,81.341 203.750,80.039 203.445 C 78.736 203.139,76.236 202.780,74.483 202.646 C 72.730 202.512,69.927 202.109,68.254 201.752 C 66.581 201.394,64.021 201.021,62.566 200.923 C 61.111 200.826,58.492 200.462,56.746 200.115 C 55.000 199.768,52.143 199.361,50.397 199.210 C 48.651 199.059,46.151 198.693,44.841 198.397 C 43.532 198.101,41.036 197.746,39.295 197.609 C 31.525 196.996,29.064 194.660,30.151 188.927 C 30.293 188.181,30.529 186.090,30.676 184.279 C 30.823 182.469,31.185 179.902,31.481 178.575 C 31.776 177.248,32.135 174.737,32.277 172.995 C 32.419 171.252,32.822 168.431,33.172 166.726 C 33.522 165.020,33.893 162.374,33.996 160.847 C 34.099 159.319,34.460 156.819,34.797 155.291 C 35.134 153.763,35.544 151.385,35.707 150.007 C 35.871 148.628,36.238 146.449,36.524 145.165 C 36.810 143.880,37.163 141.377,37.307 139.602 C 37.452 137.828,37.856 134.947,38.206 133.201 C 38.556 131.455,38.921 128.896,39.016 127.513 C 39.112 126.131,39.477 123.571,39.827 121.825 C 40.177 120.079,40.586 117.190,40.735 115.404 C 40.885 113.618,41.246 111.082,41.539 109.768 C 41.832 108.454,42.185 105.981,42.325 104.272 C 42.464 102.563,42.870 99.801,43.225 98.135 C 43.581 96.469,43.952 93.915,44.050 92.460 C 44.147 91.005,44.511 88.416,44.858 86.706 C 45.205 84.996,45.608 82.125,45.754 80.327 C 45.900 78.528,46.249 76.058,46.529 74.838 C 46.809 73.618,47.173 71.581,47.337 70.313 C 48.173 63.873,49.373 63.116,57.700 63.771 M265.476 65.760 C 264.603 65.959,262.222 66.429,260.185 66.805 C 239.311 70.658,225.632 86.231,228.279 103.130 C 229.182 108.892,234.955 112.831,240.582 111.524 C 246.706 110.102,249.786 106.724,252.657 98.280 C 254.953 91.525,258.399 88.398,264.499 87.533 C 276.275 85.862,284.236 94.046,280.287 103.764 C 278.525 108.101,277.207 109.828,270.241 116.931 C 262.992 124.323,260.941 127.672,258.999 135.294 C 256.810 143.883,263.566 151.955,271.802 150.591 C 277.051 149.721,280.601 146.334,282.783 140.112 C 285.028 133.712,287.997 129.485,292.841 125.794 C 297.336 122.368,303.888 113.960,306.621 108.111 C 311.015 98.703,307.962 83.150,300.356 76.199 C 295.262 71.543,288.495 68.077,282.275 66.937 C 280.747 66.657,278.366 66.186,276.984 65.890 C 273.987 65.249,268.016 65.181,265.476 65.760 M102.381 91.305 C 95.660 92.769,94.438 93.119,92.260 94.209 C 81.222 99.731,75.620 112.172,81.664 117.742 C 86.523 122.222,92.122 120.485,98.846 112.413 C 104.854 105.200,115.032 105.888,119.072 113.780 C 121.879 119.264,119.079 123.463,108.598 129.485 C 99.302 134.827,96.081 138.355,94.557 144.870 C 92.217 154.868,104.705 160.055,111.051 151.720 C 114.640 147.006,119.219 143.389,126.501 139.515 C 137.197 133.826,141.856 126.461,141.159 116.343 C 140.267 103.386,132.601 95.948,115.868 91.804 C 109.342 90.188,107.779 90.130,102.381 91.305 M272.762 159.438 C 268.815 160.270,263.251 164.705,262.284 167.789 C 262.045 168.554,261.790 170.430,261.718 171.958 C 260.889 189.611,284.223 193.277,289.499 176.323 C 292.442 166.866,282.951 157.291,272.762 159.438 M98.177 162.985 C 92.247 164.149,88.922 168.364,89.211 174.351 C 89.801 186.620,106.756 188.157,110.216 176.255 C 112.304 169.075,105.477 161.551,98.177 162.985 " stroke="none" fill="#D12E2E" fill-rule="evenodd"></path></g></svg>
    <h2>Welcome to EHU Quiz Society!</h2>

    @foreach($errors->all() as $message)
        <div class="alert alert-danger alert-dismissible" role="alert">{{$message}}</div>
    @endforeach
    <form method="post" action="{{route('storeTeam')}}">
        @csrf
        <label for="TeamName">Please choose a team name! (Max 50. chars)</label>
        <input type="text" name="name" minlength="3" maxlength="50" class="form-control border-dark" style="margin-bottom: 10px">
        <button type="submit" class="btn btn-block btn-success">Join Quiz!</button>
    </form>
    </div>
@endsection
