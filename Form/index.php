<form action="xuly.php" method="post" name="form">
    <label>Username</label>
    <input type="text" name="username">
    </br>
    <label> Password</label>
    <input type="password" name="password">
    </br>
    <label>Birth of date</label>
    <input type="date" name="birth">
    </br>
    <label>Gender</label>
    <input type="radio" name="gioitinh" value="Male"> Male
    <input type="radio" name="gioitinh" value="Female"> Female
    </br>
    <label>Country</label>
    <select name="country">
        <option value="vienam">Việt Nam</option>
        <option value="thailan">Thái lan</option>
        <option value="malaysia">Malaysia</option>
    </select>
    <br>
    <label>Note</label>
    <textarea name="cmt" id="" cols="30" rows="10"></textarea>
    <br>
    <label>Bạn có đồng ý với điều khoản</label>
    <input type="checkbox" name="check">
    <br>
    <input type="submit" value="send" name="send">
</form>