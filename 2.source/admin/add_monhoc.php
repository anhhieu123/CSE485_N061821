<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="user.css"/>
</header>
<body>
<div id="trang">
    <div id="tieude">
        <h3>Hi admin!</h3>
    </div>
    <div id="bang">
    <form action="inserttracnghiem.php" method="post">
        <div id="bang1">
        <div id="cauhoi">
        <h4>Thêm câu hỏi</h4>
        <table>
            <tr>
                <td>Câu hỏi</td>
                <td><input type="text" name="cauhoi" id=""></td>
            </tr>
        </table>
        <table>
            <h4>Nội dung đáp án</h4>
            <tr>
                <td>Đáp án A</td>
                <td><input type="text" name="a"></td>
            </tr>
            <tr>
                <td>Đáp án B</td>
                <td><input type="text" name="b"></td>
            </tr>
            <tr>
                <td>Đáp án C</td>
                <td><input type="text" name="c"></td>
            </tr>
                <td>Đáp án D</td>
                <td><input type="text" name="d"></td>            
            </tr>
        </table>
        </div>
        <div>
        <table>
            <tr>
                <td>Mã Môn</td>
                <td></td>
                <td><input checked="checked" type="radio" name="made" id="" value="1">Toán</td>
                <td><input type="radio" name="made" id="" value="2">Lý</td>
                <td><input type="radio" name="made" id="" value="3">Hóa</td>
                <td><input type="radio" name="made" id="" value="4">sinh học</td>
                <td><input type="radio" name="made" id="" value="5">Văn học</td>
                <td><input type="radio" name="made" id="" value="6">Tiếng anh</td>
                <td><input type="radio" name="made" id="" value="7">Lịch sử</td>
                <td><input type="radio" name="made" id="" value="8">Giáo dục công dân</td>
            </tr>
            <tr>
                <td>Đáp Án đúng</td>
                <td></td>
                <td><input checked="checked" type="radio" name="dapan" id="" value="a">A</td>
                <td><input type="radio" name="dapan" id="" value="b"> B</td>
                <td><input type="radio" name="dapan" id="" value="c">C</td>
                <td><input type="radio" name="dapan" id="" value="d">D</td>
            </tr>
        </table>
        </div>
        </div>
        <div id="xoa">
        <table>
            <h4>Xóa câu hỏi</h4>
            <tr>
                <td>ID</td>
                <td></td>
                <td><input type="text" name="id1"></td>
            </tr>
        </table>
        </div>
        </div>
        <div class="sm">
            <input type="submit" value="Thêm mới" name="submit" class="nut">
            <input type="submit" value="Xoa" name="submit1" class="nut">
        </div>
    </form>
</div>
</body>
</html>