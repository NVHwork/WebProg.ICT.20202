<!-- 
    Author: Nguyen Manh Phuc
    Created: 3/3/2021
 -->

<?php
$img = "https://scontent.fpnh22-1.fna.fbcdn.net/v/t1.0-9/44183291_1012546862257860_1595452197229821952_o.jpg?_nc_cat=105&ccb=3&_nc_sid=cdbe9c&_nc_ohc=od4WiCDVMFoAX_s6Sn1&_nc_ht=scontent.fpnh22-1.fna&oh=71387745f223bef15bebababfd42174a&oe=6062011E"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profile - Exercise 1, 4</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <table align="center" cellspacing="0">
        <tr style="border-bottom: 1px solid black;" class="head">
            <td class="header p-10" width="60%">
                <h2>Nguyen Manh Phuc</h2>
                <span>An enthusiatic youngster who is eager to learn new knowledge.</span>
                <ul class="list">
                    <li><span><i class="far fa-calendar-alt"></i>Date of birth :</span><span>01, November, 1999</span>
                    </li>
                    <li><span><i class="far fa-envelope"></i>Email :</span><span><a class="mylink" href="mailto:phucnguyen0111@gmail.com">phucnguyen0111@gmail.com</a></span></li>
                    <li><span><i class="fas fa-phone-alt"></i>Phone :</span><span>0946532964</span></li>
                    <li><span><i class="fab fa-github"></i>Github :</span><span><a class="mylink" href="github.com/phucnguyen111">github.com/phucnguyen111</a></span></li>
                </ul>

            </td>

            <td style="text-align: center; padding: 15px 0">
                <img style="border-radius: 50%" class="img" src=<?= $img ?> />
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
                    <li><a>HTML</a></li>
                    <li><a>CSS</a>
                    </li>
                    <li><a>JavaScript</a>
                    </li>
                    <li><a>Java</a>
                    </li>

                    <li><a>Bootstrap</a>
                    </li>
                    <li><a>Git</a>
                    </li>
                    <li><a>PHP</a>
                    </li>
                    <li><a>Angular</a>
                    </li>
                    <li><a>SQLServer</a>
                    </li>
                    <li><a>MySQL</a>
                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td class="">
                <h3>Personal projects</h3>

                <div class="project">
                    <h4>Angular Project - Bakya Bakery</h4>
                    <i>08/2020 - Present</i>
                    <ul>
                        <li>Xây dựng trang web bán hàng cho tiệm bánh</li>
                        <li>Hoàn thiện phần giao diện, validate form, tạo service, gọi</li>
                        <li>API, CRUD sản phẩm</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>ITSS Software Development Project - EcoBike Rental</h4>
                    <i>09/2020 - 01/2021</i>
                    <ul>
                        <li>Ứng dụng JavaFX desktop</li>
                        <li>Phụ trách phần thiết kế User Interface, kết nối DB,</li>
                        <li>implement use case View current renting bike và Return bike</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Database Project - BloodBank Management</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Phụ trách phần front-end</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>OOP Project - Visualization for Newton's laws of motion</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Phụ trách thiết kế giao diện, introduction, first law</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>AI Project - Tic Tac Toe Game</h4>
                    <i>10/2019 - 01/2020</i>
                    <ul>
                        <li>Phụ trách phần front-end</li>
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
                            Tìm hiểu các kiến thức, công nghệ mới chuyên sâu
                            về lập trình web/mobile, thiết kế responsive
                        </li>
                        <li>
                            Học được cách làm việc nhóm hiệu quả trong môi
                            trường doanh nghiệp chuyên nghiệp
                        </li>
                        <li>
                            Định hướng lập trình viên Front-end
                        </li>
                    </ul>
                </div>
                <div class="mb-35">
                    <h3>Certificates</h3>
                    <ul class="ori">
                        <li>IELTS 8.0 (01/2020 - 01/2022)
                        </li>
                        <li>TOEIC 910 (08/2017 - 08/2019)</li>
                    </ul>
                </div>
            </td>
        </tr>

        <tr>
            <td class="last-row">
                <h3>Work experience</h3>
                <div class="project">
                    <h4>Intern</h4>
                    <p style="margin: 0;">BKC Lab - HUST</p>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Nắm được kiến thức cơ bản về ReactJS và làm sản
                            phẩm demo theo hướng dẫn http://taskmanagerphuc.freevnn.com/</li>
                        <li>Chạy, chỉnh sửa và viết tài liệu báo cáo cho dự án
                            forum mã nguồn mở Misago</li>

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
                            <h4>Korean</h4><small>Elementary Proficiency</small>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Interests</h3>
                    <ul class="skills interest">
                        <li><a>Cooking</a></li>
                        <li><a>Music</a>
                        </li>
                        <li><a>Geography</a>
                        </li>
                        <li><a>Space</a>
                        </li>
                    </ul>
                </div>

            </td>
        </tr>

    </table>

</body>

</html>