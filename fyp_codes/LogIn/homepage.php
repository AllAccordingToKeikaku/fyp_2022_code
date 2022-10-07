<!DOCTYPE html>
<html>
    <script>
        function reservationFunction(){
            window.location.href = "/fyp_codes/reservation/reservation_details.php";
        }
    </script>
    <style>
        .mouseOverEffects:hover{
            border-bottom : 3px solid #437E96;
            display: inline-block;
        }
    </style>
    <body>
        <form>
            <div style="width:1200px;margin-left:0px;margin-right:auto">
                <img src="/fyp_codes/MoshiQ2 Assets/Logo.png" style="float:left;margin-left:0px;width:500px;height:200px;display:block">
                <div style="padding-top:90px;">
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="HOME" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="ABOUT US" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="PROMOTION" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="DELIVERY" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="RESERVATIONS" style="border:0px;font-size:14;background-color:white" onclick="reservationFunction()">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="TRAFFIC" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="MENU" style="border:0px;font-size:14;background-color:white">
                    </span>
                    <span style="margin-left:30px">
                        <img src="/fyp_codes/MoshiQ2 Assets/Homepage Profile Icon.png" style="height:40px;width:auto">
                    </span>
                    <span class="mouseOverEffects" style="width:auto">
                        <input type="button" value="sign in" style="border:0px;font-size:14;background-color:white">
                    </span>
                </div>
                <img src="/fyp_codes/MoshiQ2 Assets/homePage.png" style="display:block;width:100%;height:auto;">
            </div>
        </form>
    </body>
</html>