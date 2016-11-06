<?php
$classes=[];
for($i=0;$i<5;$i++){
    $classes[$i]=" ";
}
if(isset($active))
    {
        switch ($active)
        {
            case "dashboard": $classes[0]="active";
                break;
            case "edit": $classes[4]="active";
                break;
            case "service" : $classes[2]="active";
                break;
            case "price": $classes[1]="active";
                break;
            case "ticket": $classes[3]="active";
                break;
        }
    }
    if(!isset($New))
        $New=1;
?>
<div class="sidebar sidebar-right si-si-3 sidebar-visible-md-up sidebar-light ls-top-navbar-xs-up sidebar-transparent-md" id="sidebarRight" data-scrollable>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item {{$classes[0]}}">
            <a class="sidebar-menu-button" href="/Pannel">
                <i class="sidebar-menu-icon material-icons">home</i> داشبورد
            </a>
        </li>
        <li class="sidebar-menu-item {{$classes[1]}}">
            <a class="sidebar-menu-button" href="/Plans">
                <i class="sidebar-menu-icon material-icons">credit_card</i>خرید سرویس&zwnj;ها
            </a>
        </li>
        <li class="sidebar-menu-item {{$classes[2]}}">
            <a class="sidebar-menu-button" href="/Services">
                <i class="sidebar-menu-icon material-icons">receipt</i>  سرویس&zwnj;های من
            </a>
        </li>
        <li class="sidebar-menu-item {{$classes[3]}}">
            <a class="sidebar-menu-button" href="/Tickets">
                <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
                @if($New==0)
                    <span class="sidebar-menu-label tooltip-right label label-primary">جدید</span>
                @endif
            </a>
        </li>
        <li class="sidebar-menu-item {{$classes[4]}}">
            <a class="sidebar-menu-button" href="/Profile">
                <i class="sidebar-menu-icon material-icons">create</i> ویرایش پروفایل
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="http://api.commentminer.ir">
                <i class="sidebar-menu-icon material-icons">help</i>راهنمای استفاده
            </a>
        </li>
    </ul>
</div>