<?php
 class StudentMaker{
   private  $itStudnet;
    private  $artStudnet;
    private  $eduStudnet;
    private  $engStudnet;
    private static  $aMaker;
    private __StudentMaker() {
        $itStudnet = new ItStudent();
        $artStudnet = new ArtStudent();
        $engStudnet = new EngStudent();
        $eduStudnet = new EdeStudent();
    }
    public static StudentMaker getaMaker() {
        if($aMaker == null)
            $aMaker = new StudentMaker();
        return $aMaker;
    }
    public function viewIT(){
        $itStudnet.view();
    }
    public function viewART(){
        $artStudnet.view();
    }
    public function viewEng(){
        $engStudnet.view();
    }
    public function viewEdu(){
        $eduStudnet.view();
    }
}
