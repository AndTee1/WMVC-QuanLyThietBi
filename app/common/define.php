<?php 
    // mảng tên tòa nhà 
    $listBuilding = [
        'k1'=> 'T1',
        'k2'=> 'T2',
        'k3'=> 'T3',
        'k4'=> 'T4',
        'k5'=> 'T5',
        ];
    // Mảng tên chuyên ngành
    $listSpecialized = [
        '001' => 'Khoa học máy tính',
        '002' => 'Khoa học dữ liệu',
        '003' => 'Hải dương học',

    ];
    // Mảng tên bằng cấp
    $listDegree = [
        '001'=> 'Cử nhân',
        '002'=> 'Thạc sĩ',
        '003'=> 'Tiến sĩ',
        '004'=> 'Phó giáo sư',
        '005'=> 'Giáo sư',

    ];
function checkLogin()
{
	if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
		header("Location:../../login.php");
	}
}
?>