<?php

$hp = [
    ["Samsung", "Samsung Galaxy Note20 Ultra", 14500000],
    ["Samsung", "Samsung Galaxy S20", 11400000],
    ["Samsung", "Samsung Galaxy A21s", 2299000],
    ["Realme", "Realme 5i", 1650000],
    ["Realme", "Realme 6 Pro", 4000000],
    ["Realme", "Realme 5 Pro", 2999000],
    ["Realme", "Realme 3", 2000000],
    ["Xiaomi", "Xiaomi Redmi Note 9 Pro", 3298000],
    ["Xiaomi", "Xiaomi Redmi Note 8 Pro", 3208000],
    ["Xiaomi", "Xiaomi Redmi 7a", 1300000],
    ["Vivo", "Vivo Y30", 2800000],
    ["Vivo", "Vivo Y20", 2200000],
    ["Vivo", "Vivo Y11", 1800000],
    ["Oppo", "Oppo A52", 2800000],
    ["Oppo", "Oppo Reno3", 3480000],
    ["Oppo", "Oppo A3S", 1000000],
    ["Oppo", "Oppo A12", 1500000]

];

// Membuat Pilihan
$temp_arr=[];

foreach ($hp as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk_hp=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk_hp=$hp;
    }else{
        foreach($hp as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk_hp[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $tampilkan_merk_hp=$hp;
}
// var_dump($tampilkan_merk_hp);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center" style="color: red;">DAFTAR PENJUALAN SMARTPHONE</h2>
        <form action="remidi.php" method="post">
            <select name="filter">
                <option value="">
                    Tampilkan Semua
                </option>
                <?php foreach ($pilihan as $key): ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                <?php endforeach; ?>      
              </select>
            <input class="btn btn-dark" type="submit" value="filter">
          </form>
        <table class="table table-dark mt-2">
      <thead class="thead-light">
        <tr>
          <th scope="col">MERK SMARTPHONE</th>
          <th scope="col">TYPE</th>
          <th scope="col">HARGA</th>
        </tr>
        </thead>
        <?php $grand_total=0; ?>
        <?php foreach ($tampilkan_merk_hp as $key => $value): ?>
        <tbody>
        <tr>
          <td><?php echo $value[0]; ?></td>
          <td><?php echo $value[1]; ?></td>
          <td><?php echo $value[2]; ?></td>
        </tr>
      </tbody>
      <?php $grand_total+=$value[2]; ?>
      <?php endforeach; ?>
      <thead class="thead-light">
        <tr>
          <th scope="col">Total Keseluruhan</th>
          <th scope="col"></th>
          <th scope="col"><?php echo $grand_total; ?></th>
        </tr>
      </thead>
</table>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>