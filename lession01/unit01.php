<?php
    declare(strict_types=1);//thong bao loi tu phien ban 7.0 tro len
    $n = isset($a)? $a:1;
    // echo $n;
    // echo "</br>";
    $a=110;
    $m=$a??10;//$n = isset($a)? $a:1;
    // echo $m;
    // echo "</br>";
    //2spaceship
    $compare =$n <=>$m;
    //-1 thì trái <br phải
    //1 trái >phả
    // 0 thì bằng nhau
    // echo $compare;
    $k=10;

    function number($a,$b){
        return $a +$b;
    }
    // echo number($m,$m);

    function number2($a,$b){
        global $k;
        return $a +$b+$k;
    }
    // echo number2($m,$m);


    function checkStatic(){
        static $count=0;
        $count++;
        echo $count;
    }
    // checkStatic();
    // checkStatic();
    // checkStatic();
    //luu gia tri sau chay ham

    //tham tri
    $thamTri=  10;
    function hamThamtri($thamTri1){
        $thamTri1+=10;
    }
    // echo $thamTri;
    // hamThamtri($thamTri);
    // echo $thamTri;
  
    //thamchieu
    $thamChieu=  20;
    $v=10;
    function hamThamchieu(& $thamChieu1){
        $thamChieu1+=10;
    }
    // echo $thamChieu;
    // hamThamchieu($thamChieu);
    // echo $thamChieu;

    /******* lamda function php*****/
    // var_dump($thamChieu);
    
    $a=function($thamChieu) use($v){
        return $thamChieu+$v;
    };

    // echo $a($thamChieu);

    //bên dưới chỉ sử dụng phiên bản 7.0 trở lên
    function kiemTrasonguyento(int $a):bool{
        if($a<=1){
            return false;
        }
        if($a=2){
            return true;
        }
        for( $i=2;$i<=sqrt($a);$i++)
        {
            if($a%$i==0)
            {
                return false;
            }
        }
        return true;
    }
    //bool bat buoc co return vaf kieu tra ve la bool
    // echo kiemTrasonguyento(1);
    // var_dump(kiemTrasonguyento(5));

    // chuoi
    $str ='chao cac bn';
    $str2="chao cac ban 2";
    //''ko su dung ngay trong chuoi dk
    //""su dung dk
//  echo strlen($str);

//***************************************************************** */
    // cac kien thuc ve mang(array) trong php
// 1 - kieu du lieu : array
// 2 - dinh nghia / khai bao
$arrNumber = array(); // mang rong(chua co phan tu)
$arrNumber2 = []; // mang rong (php 5.3 tro len)
// 3 - mang 1 chieu (mang don) (cac phan tu trong mang la cac gia tri don)
$numbers = [1,2,3,4,5,6,7,8,9];
// 4 - mang da chieu(phan tu ben trong mang lai mot gia tri la mot mang)
$numbers2 = [1,2,3,[100,200,300],4,5,6];
// 5 - mang tuan tu (key: tu dong duoc sap xep theo 1 thu tu nao do(tang dan) - key se la so) (mang do se khong can khai nao key)
$numbers3 = [1,2,3,4,5,6,7,8,9]; // mang nay ko can khai bao key (key cua cac phan tu nam trong mang se duoc tu dong tao(se la so) ra va sap xem tang dan)
//echo "<pre>";
//print_r($numbers3); // khong dung echo de hien thi mang
// 6 -mang khong tuan tu(mang ket hop) (mang se duoc khai bao key - index va no khong tuan theo mot trat tu sap xep nao ca)
$student = ['name' => 'Van Teo', 'age' => 18, 'email' => 'vanteo@gmail.com'];
// echo "<pre>";
// print_r($student);
// 7 - truy cap vao mot phan tu nam trong mang
// cu phap: nameArray[key];
$nameStudent = $student['name']; // ten sinh vien
echo $nameStudent;
echo '<br/>';
echo $numbers3[8]; // 9
echo '<br/>';
echo $numbers2[3][1]; // 200;
// 8 - them phan vao mang ban dau
$student['address'] = 'Ha Noi';
echo "<pre>";
print_r($student);
$arrNumber[0]=10;
$arrNumber[1]=20;
echo "<pre>";
print_r($arrNumber);
// 9 - dung ham count() dem kiem tra so luong phan tu trong mang (dem tu 1)
echo '<br/>';
echo count($student);
echo '<br/>';
// 10 - duyet qua tat ca cac phan tu nam trong mang
$arrNumber1 = [1,2,3,4,5,6,7,8,9];
// for ...
for($i = 0; $i < count($arrNumber1); $i++) {
    // $i dai dien index - key cua phan tu trong mang
    echo "key : {$i} - value : {$arrNumber1[$i]}";
    echo "<br/>";
}
// foreach...as
foreach($arrNumber1 as $k => $item) {
    // $k : bien dai dien cho index - key cua phan tu
    // $item: bien dai dien cho cac gia tri cua phan tu nam trong mang
    // as : tu khoa phai khai bao
    // => : cu phap phai khai bao khi muon su dung key trong mang 

    echo "key of array : {$k} - value of array : {$item}";
    echo "<br/>";
}
foreach($arrNumber1 as $val) {
    // trong truong hop khong quan tam den key cua mang
    // trong truong hop nay khong the biet index-key cua mang (ko khai bao)
    echo "val of array : {$val}";
    echo "<br/>";
}

// mang da chieu 
// 3 phan tu
$infoStudents = [
    [
        'msv' => 1,
        'name' => 'Van Teo',
        'age' => 20,
        'email' => 'vanteo@gmail.com',
        'gender' => 1, // 1 - nam | 0 - nu
        'phone' => '0132143432',
        'money' => 2000000
    ], // dai dien thong tin cho 1 nguoi sinh vien
    [
        'msv' => 2,
        'name' => 'Van Ty',
        'age' => 19,
        'email' => 'vanty@gmail.com',
        'gender' => 1, // 1 - nam | 0 - nu
        'phone' => '01321433',
        'money' => 3000000
    ],
    [
        'msv' => 3,
        'name' => 'Thi Mo',
        'age' => 18,
        'email' => 'thimo@gmail.com',
        'gender' => 0, // 1 - nam | 0 - nu
        'phone' => '2323232323',
        'money' => 4000000
    ]
];
echo "<br/>";

// duyet mang
foreach($infoStudents as $key => $info) {
    // $key ??? 0,1,2
    // $info : thong tin cua 1 ban sinh vien tuong ung (chinh la mang con)
    // hien thi ten cua tat cac ban sinh vien
    echo $info['name'];
    echo '<br/>';
}
?>