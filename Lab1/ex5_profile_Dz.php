<!-- 
    Author: Tran Thai Duong
    Created: 3/24/2021
    Used template from Nguyen Manh Phuc
 -->

 <?php
$img = "https://scontent.xx.fbcdn.net/v/t1.15752-9/164329518_5201271573279009_7858615704838029633_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=58c789&_nc_ohc=ty8l_uvcPREAX-eRbTG&_nc_ht=scontent.xx&oh=25e10197884c39d8589ae96e5dfa0267&oe=607F781C"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profile - Exercise 1, 4 - Dz</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <table align="center" cellspacing="0">
        <tr style="border-bottom: 1px solid black;" class="head">
            <td class="header p-10" width="60%">
                <h2>Tran Thai Duong</h2>
                <span>A boy is searching for his endgame</span>
                <ul class="list">
                    <li><span><i class="far fa-calendar-alt"></i>Date of birth :</span><span>13, October, 1999</span>
                    </li>
                    <li><span><i class="far fa-envelope"></i>Email :</span><span><a class="mylink" href="mailto:shiroyasha699969@gmail.com">shiroyasha699969@gmail.com</a></span></li>
                    <li><span><i class="fas fa-phone-alt"></i>Phone :</span><span>0917891116</span></li>
                    <li><span><i class="fab fa-github"></i>Github :</span><span><a class="mylink" href="https://github.com/ImDuong">github.com/ImDuong</a></span></li>
                </ul>

            </td>

            <td style="text-align: center; padding: 15px 0">
                <img style="border-radius: 50%; height: 250px;" class="img" src=<?= $img ?> />
            </td>

        </tr>

        <tr>
            <td class="p-17">
                <h3>Education</h3>
                <h4>Global ICT Program</h4>
                <p>Hanoi University of Science and Technology</p>
                <i>Sept, 2017 - Present</i>
            </td>
            <td class="p-17">
                <h3>Skills</h3>
                <ul class="skills">
                    <li><a>Git</a></li>
                    <li><a>Windows Kernel Driver</a></li>
                    <li><a>Java</a></li>
                    <li><a>Python</a></li>
                    <li><a>PHP</a></li>
                    <li><a>C, C++, C#</a></li>
                    <li><a>Golang</a></li>
                    <li><a>.NET CORE</a></li>
                    <li><a>HTML, CSS, JAVASCRIPT, BOOTSTRAP</a></li>
                    <li><a>SQLServer, MYSQL</a></li>
                </ul>
            </td>
        </tr>

        <tr>
            <td class="">
                <h3>Personal projects</h3>

                <div class="project">
                    <h4>CyStack Endpoint Security v1</h4>
                    <i>03/2020 - 01/2021</i>
                    <ul>
                        <li>Hoàn thiện phía agent và driver bên windows</li>
                        <li>Viết kernel driver để tương tác với agent trên user mode</li>
                        <li>Hoàn thiện active response với giao diện web</li>
                        <li>Tìm hiểu và áp dụng chữ ký điện tử cho sản phẩm</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>CyStack Scanner</h4>
                    <i>10/2020 - 12/2020</i>
                    <ul>
                        <li>Dẫn đầu team xây dựng sản phầm bên Windows và Linux</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>CyStack Endpoint Security v2 (Vulnscan)</h4>
                    <i>01/2021 - present</i>
                    <ul>
                        <li>Dẫn đầu team xây dựng sản phầm bên Windows và Linux</li>
                        <li>Xây dựng core và cấu trúc các plugin</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>ITSS Software Development Project - EcoBike Rental</h4>
                    <i>09/2020 - 01/2021</i>
                    <ul>
                        <li>Ứng dụng JavaFX desktop</li>
                        <li>Phụ trách phần tương tác với trạm xe</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Database Project - OneMovie</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Phụ trách phần back-end, cơ sở dữ liệu và front-end</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>OOP Project - Battleship</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Phụ trách thiết kế cấu trúc, giao diện, lập trình tương tác cho game</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>AI Project - Tic Tac Toe Game</h4>
                    <i>10/2019 - 01/2020</i>
                    <ul>
                        <li>Phụ trách phần thuật toán minimax cho bot</li>
                    </ul>
                </div>
            </td>
            <td>
                <div class="mb-35">
                    <h3>Achievement</h3>
                    <p>Học bổng tham gia chương trình trao đổi sinh viên
                        TFI SCALE 2018 - 2019 tại Singapore và Việt
                        Nam (09/2018 - 03/2019)</p>
                </div>
                <div class="mb-35">
                    <h3>Orientation</h3>
                    <ul class="ori">
                        <li>
                            Tìm hiểu các kiến thức, công nghệ mới chuyên sâu để thúc đẩy sự phát triển của nhân loại
                        </li>
                        <li>
                            Học được cách làm việc nhóm hiệu quả trong môi
                            trường doanh nghiệp chuyên nghiệp
                        </li>
                        <li>
                            Mục tiêu áp dụng trí tuệ nhân tạo vào phát triển công nghệ và tích hợp với an toàn thông tin
                        </li>
                        <li>
                            Định hướng kỹ sư khoa học dữ liệu
                        </li>
                    </ul>
                </div>
                <div class="mb-35">
                    <h3>Certificates</h3>
                    <ul class="ori">
                        <li>TOEIC 750 (08/2017 - 08/2019)</li>
                        <li>Chứng chỉ "PHP course" của SOICT và TRIBAL MEDIA HOUSE</li>
                        <li>Chứng nhận "JAVA WEB 4.0" của NIIT INDIA</li>
                        <li>Chứng chỉ "MIXED REALITY PRODUCT DEVELOPMENT" của UNIVERSITY OF TURKU</li>
                        <li>Chứng chỉ tham gia "TEMASEK FOUNDATION INTERNATIONAL SCALE SCHOLAR 2018" (2019)</li>
                    </ul>
                </div>
            </td>
        </tr>

        <tr>
            <td class="last-row">
                <h3>Work experience</h3>
                <div class="project">
                    <h4>Intern</h4>
                    <p style="margin: 0;">CyStack</p>
                    <i>05/2019 - present</i>
                    <ul>
                        <li>Nắm được kiến thức tổng quát về giải pháp an toàn thông tin phía endpoint</li>
                        <li>Học được các loại tấn công phổ biến và kinh nghiệm tham gia CTF</li>
                        <li>Dẫn đầu team làm sản phẩm Endpoint và Scanner</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Intern</h4>
                    <p style="margin: 0;">MISA</p>
                    <i>05/2020 - 08/2020</i>
                    <ul>
                        <li>Nắm được kiến thức cơ bản về REACTJS, .NET CORE và cùng nhóm hoàn thiện sản phẩm MONEYKEEPER v1</li>
                        <li>Làm quen với phân tích nghiệp vụ và lập kế hoạch</li>
                    </ul>
                </div>
            </td>
            <td class="last-row">
                <div>
                    <h3>Languages</h3>
                    <ul class="lang">
                        <li>
                            <h4>English</h4><small>Working
                                Proficiency</small>
                        </li>
                        <li>
                            <h4>Japanese</h4><small>Elementary Proficiency</small>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Interests</h3>
                    <ul class="skills interest">
                        <li><a>Solving puzzle</a></li>
                        <li><a>Chess</a></li>
                        <li><a>Music</a></li>
                        <li><a>Reading books and improve self frontier of knowledge</a></li>
                        <li><a>Finding how society works</a></li>
                    </ul>
                </div>

            </td>
        </tr>

    </table>

</body>

</html>