<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Appointment Reminder Email Template</title>
    <meta name="description" content="Appointment Reminder Email Template">
</head>
<style>
    a:hover {
        text-decoration: underline !important;
    }
</style>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <!-- Logo -->
                    <tr>
                        <td style="text-align:center;">
                            <a href="https://rakeshmandal.com" title="logo" target="_blank">
                                <img width="50" height="50" class="rounded-circle" src="{{ global_asset('images/forApp/Untitled-1.png') }}" >
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <!-- Email Content -->
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <!-- Title -->
                                <tr>
                                    <td style="padding:0 15px; text-align:center;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                            Plan</h1>
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                                        width:100px;"></span>
                                    </td>
                                </tr>
                                <!-- Details Table -->
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; border: 1px solid #ededed">
                                            <tbody>
                                                {{-- @foreach ($recommends as $recommend) --}}
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Project Name :</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            {{ $recommends->Project_Name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Project Type</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            {{ $recommends->project_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Minimun number of workers required:</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            {{ $recommends->number_of_workers }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            floors /building height:</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            
                                                        
                                                        {{ $recommends->floor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Size of land similar to yours(sq)</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            {{ $recommends->Size }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Design Preference</td>
                                                        <td
                                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                            {{ $recommends->Design_Preferences }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Reason</td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->description }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Functional requirements</td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->Functional_Requirements }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Labor hourly rate(Negotiate): </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->labor_hourly_rate }}</td>
                                                    </tr>

                                                

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Number of Rooms per House: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->Room_number }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Number of Bedrooms: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->number_of_bedrooms }}</td>
                                                    </tr>

                                                

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Number of Bathrooms: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->bathroom }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Number of Arhchitectural Style: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->Architectural_style }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Duration: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->duration }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td
                                                            style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Price: </td>
                                                        <td style="padding: 10px; color: #455056;">{{ $recommends->price }}</td>
                                                    </tr>

                                                    
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
