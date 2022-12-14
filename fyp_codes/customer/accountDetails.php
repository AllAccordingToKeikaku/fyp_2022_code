<?php

?>
<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function ordersFunction(){
            $("#divTable tr").remove(); 
            
            document.getElementById("ordersDisplay").style.display = 'inline-block';
            document.getElementById("reservationsDisplay").style.display = 'none';
            document.getElementById("accountDisplay").style.display = 'none';
            document.getElementById("promoDisplay").style.display = 'none';
            document.getElementById("notificationsDisplay").style.display = 'none';

            var orderArray = ["#125415", "#225215", "#3125125"];
            var dateArray = ["20 September 2022", "21 September 2022", "22 September 2022"];
            var dayArray = ["Tuesday", "Wednesday", "Thursday"];
            var timeArray = ["1:00pm~2:00pm", "2:00pm~3:00pm", "3:00pm~4:00pm"];
            var tempItemArray = [["1x Choc Sweet", "1x Mango Smooth"], ["2x Choc Sweet"], ["3x Choc Sweet", "1x Strawberry bear"]];
            var itemArray = [];
            var priceArray = ["$1.00", "$2.00", "$3.00"];
            
            var x;
            var y;
            var tempString = "";
            var table = document.getElementById('ordersList');

            for (x=0; x<orderArray.length; x++){
                var row = table.insertRow(x);
                var cell = row.insertCell(0);
                cell.innerHTML = '<text id="order' + String(x) + '"></text>';
            }

            for (x=0; x<tempItemArray.length; x++){
                tempString = "";
                if(tempItemArray[x].length <= 1){
                    tempString = tempItemArray[x] + '</br>';
                    itemArray.push(tempString);
                }
                else{                    
                    for (y=0;y<tempItemArray[x].length; y++){
                        tempString += tempItemArray[x][y] + '</br>'; 
                    }
                    itemArray.push(tempString);
                }
            }

            for (x=0; x<orderArray.length; x++){
                document.getElementById("order"+String(x)).innerHTML = '<text style="border-radius:15px;background-color:#A0D5EB66;border:0px;margin-top:2px;width:600px;padding:5px;display:inline-block">' +
                                                            '<b>Order ID:</b> '+ orderArray[x] + '</br>' +
                                                            '<b>Date & Time:</b> '+ dateArray[x] + 
                                                            ' (' + dayArray[x] + '), ' + timeArray[x] +
                                                            '</br></br>' + itemArray[x] + '</br>' +  
                                                            '<text><b><u>Total cost: </u></b></text>' +
                                                            '<b style="float:right;">' + priceArray[x] + 
                                                            '</b></text></br>';
            }
        }

        function reservationsFunction(){
            document.getElementById("ordersDisplay").style.display = 'none';
            document.getElementById("reservationsDisplay").style.display = 'block';
            document.getElementById("accountDisplay").style.display = 'none';
            document.getElementById("promoDisplay").style.display = 'none';
            document.getElementById("notificationsDisplay").style.display = 'none';
        }

        function accountFunction(){
            document.getElementById("ordersDisplay").style.display = 'none';
            document.getElementById("reservationsDisplay").style.display = 'none';
            document.getElementById("accountDisplay").style.display = 'block';
            document.getElementById("promoDisplay").style.display = 'none';
            document.getElementById("notificationsDisplay").style.display = 'none';
        }

        function promoFunction(){
            document.getElementById("ordersDisplay").style.display = 'none';
            document.getElementById("reservationsDisplay").style.display = 'none';
            document.getElementById("accountDisplay").style.display = 'none';
            document.getElementById("promoDisplay").style.display = 'block';
            document.getElementById("notificationsDisplay").style.display = 'none';
        }

        function notificationsFunction(){
            document.getElementById("ordersDisplay").style.display = 'none';
            document.getElementById("reservationsDisplay").style.display = 'none';
            document.getElementById("accountDisplay").style.display = 'none';
            document.getElementById("promoDisplay").style.display = 'none';
            document.getElementById("notificationsDisplay").style.display = 'block';
        }

        function reminderFunction(){
            document.getElementById("ordersDisplay").style.display = 'none';
            document.getElementById("reservationsDisplay").style.display = 'none';
            document.getElementById("accountDisplay").style.display = 'none';
            document.getElementById("promoDisplay").style.display = 'none';
            document.getElementById("notificationsDisplay").style.display = 'none';
        }
    </script>
    <style>
        .mouseOverEffects:hover{
            border-left : 3px solid #437E96;
        }
    </style>
    <body>
        <form>
            <div style="width:1100px">
                <div>
                    <img src="/fyp_codes/MoshiQ2 Assets/Logo.png" style="margin-left:0px;width:500px;height:200px;display:block"></br>
                </div>

                <div style="float:left;margin-left:30px;display:inline-block">
                    <text style="color:#437E96;font-size:30px">ACCOUNT</text></br>
                    <div style="float:left;margin-left:40px;margin-top:30px;display:inline-block">
                    <div class="mouseOverEffects" style="width:120px">
                        <input type="button" id="ordersButton" name="ordersButton" value="Orders" style="padding:10px;border:0px;background-color:white" onclick="ordersFunction()"></br>
                    </div>

                    <div class="mouseOverEffects" style="width:120px">
                        <input type="button" id="reservationsButton" name="reservationsButton" value="Reservations" style="padding:10px;border:0px;background-color:white" onclick="reservationsFunction()"></br>
                    </div>

                    <div class="mouseOverEffects" style="width:120px">
                        <input type="button" id="accountButton" name="accountButton" value="Account" style="padding:10px;border:0px;background-color:white" onclick="accountFunction()"></br>
                    </div>

                    <div class="mouseOverEffects" style="width:120px">
                        <input type="button" id="promoButton" name="promoButton" value="Promo Codes" style="padding:10px;border:0px;background-color:white" onclick="promoFunction()"></br>
                    </div>

                    <div class="mouseOverEffects" style="width:120px">
                        <input type="button" id="notificationsButton" name="notificationsButton" value="Notifications" style="padding:10px;border:0px;background-color:white" onclick="notificationsFunction()"></br>
                    </div>
                </div>
                </div>

                <div style="float:left;margin-left:300px;">
                    <div id="ordersDisplay" style="display:none;width:600px;">
                        <text style="color:#437E96;font-size:30px;">
                            Orders                               
                        </text>
                        </br></br>
                        <text style="font-size:20px;color:black;display:inline-block">
                            Keep track of your upcoming and past orders all in one place.
                        </text>
                        </br></br></br>
                        <text style="color:#437E96;font-size:30px;">
                            Upcoming Orders                               
                        </text>
                        </br></br>
                        <div id="divTable">
                            <table id="ordersList"></table>
                        </div>                
                        </br></br></br>
                        <text style="color:#437E96;font-size:30px;">
                            Past Orders                               
                        </text>
                        <text style="border-radius:15px;background-color:#A0D5EB66;border:0px;margin-top:5px;width:600px;padding:5px;display:inline-block">
                            <b>Order ID:</b> #124125165 </br>
                            <b>Date & Time:</b> 20 September 2022 (Tuesday), 1.30pm-2.30pm </br></br>
                            2x Choc Sweet
                            <b style="float:right;">$24.20</b>
                        </text>
                    </div>

                    <div id="reservationsDisplay" style="display:none">
                        <text style="color:#437E96;font-size:30px;">
                            Reservations                              
                        </text>
                        </br></br>
                        <text style="font-size:20px;color:black">
                            Keep track of your upcoming and past orders all in one place.
                        </text>
                    </div>

                    <div id="accountDisplay" style="display:none">
                        <text style="color:#437E96;font-size:30px;">
                            Account - Customer                            
                        </text>
                        </br>
                        <text style="font-size:20px;color:black">
                            Keep track of your upcoming and past orders all in one place.
                        </text>
                    </div>

                    <div id="promoDisplay" style="display:none">
                        <text style="color:#437E96;font-size:30px;">
                            Promo Codes                             
                        </text>
                        </br>
                        <text style="font-size:20px;color:black">
                            Keep track of your upcoming and past orders all in one place.
                        </text>
                    </div>

                    <div id="notificationsDisplay" style="display:none">
                        <text style="color:#437E96;font-size:30px;">
                            Notifications                              
                        </text>
                        </br>
                        <text style="font-size:20px;color:black">
                            Keep track of your upcoming and past orders all in one place.
                        </text>
                    </div>
                </div>         
            </div>
        </form>
    </body>
</html>