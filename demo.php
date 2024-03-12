
// interface cal_salary{
//   public function salary();
// }
// class hod implements cal_salary{
//   public function salary(){
//     $da=10000;
//     $hra =
//   }
//   class faculty implements cal_salary{
//     public function salary(){
//
//     }
//
//     class pun implements cal_salary{
//       public function salary(){
//
//       }
//   }
//

 <?php
 interface cal_salary();
 {
   public function calculate();
 }
 class principal implements cal_salary
 {
   public function calculate(1000,10,1,2)
 }
 calss hod implement cal_salary
 {
   public function calculate(500,5,1,2)
 }
 class lecture implement cal_salary
 {
   public function calculate(250,3,1,2)
 }
 class pion implement cal_salary
 {
   public function calculate(160,1,1,2)
 }
 public function calculate($da,$ta,$m,$hra)
 {
   public $sal = $da+$ta+$m+$hra;
   echo $sal;
 }
  ?>
