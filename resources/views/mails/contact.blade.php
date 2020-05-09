
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
    <title>Contact Us: {{$subject}}</title>
  </head>
    <body>
      <span class="preheader"></span>
    <!-- Info Banner For Announcements or Links -->
    <!-- <a href="https://zurb.com/university/foundation-intro" class="docs-banner course-banner">
      <div class="info">
        <h5 class=""><strong>To master everything new in 6.4, along with the rest of Foundation register for our Aug 8th Webinar Class &rsaquo;</strong></h5>
      </div>
    </a> -->

    <!-- <a href="https://zurb.com/wired" id="notice">
      <div class="info hide-for-small">
        <div id="clockdiv" class="countdown">
            <span class="timer-day days"></span>
            <span class="timer-colon">:</span>
          <span class="timer-hour hours"></span>
          <span class="timer-colon">:</span>
          <span class="timer-hour minutes"></span>
          <span class="timer-colon">:</span>
          <span class="timer-seconds seconds"></span>
        </div>
      </div>
    </a> -->

<table class="body">
  <tr>
    <td align="center" class="center" valign="top">
      <center data-parsed="">
        <style class="float-center" type="text/css">
              body,
              html,
              .body {
                background: #f3f3f3 !important;*/
              }
              .container.header {
                background: #f3f3f3;
                margin-top:2%;
              }
              .body-drip {
                border-top: 8px solid #FFF;
                margin-bottom:2%;

              }
              .header {
                background-color: #000;
                color:white;
              }
              h1{
                  text-align:center;
                  margin-top:2%;
              }
              .black_white{
                  background-color:#000;
                  color:white;
                  margin:2% 0%;
                  padding:3%;

              }
              .contactdata{
                  font-size: 20pt;
                  font-weight:700;
                  padding:2%;
              }
        </style><!-- move the above styles into your custom stylesheet -->
        <table class="spacer float-center">
          <tbody>
            <tr>
              <td height="80px" style="font-size:32px;line-height:32px';" class="header">
                 <h1>Chateau-meiland</h1>
            </td>
            </tr>
          </tbody>
        </table>
        <table align="center" class="container header float-center">
          <tbody>
            <tr>
              <td>
                <table class="row">
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <table align="center" class="container body-drip float-center">
          <tbody>
            <tr>
              <td>
                <center data-parsed="">
                  <img align="center" alt="" class="float-center" src="http://chateau-meiland.test/images/chateau.jpg">
                </center>
                <table class="spacer">
                  <tbody>
                    <tr>
                      <td height="16px" style="font-size:16px;line-height:16px;"></td>
                    </tr>
                  </tbody>
                </table>
                <table class="row">
                  <tbody>
                    <tr>
                      <th class="small-12 large-12 columns first last">
                        <table>
                          <tr>
                            <th>
                              <h4 class="text-center">Contact Us </h4>
                              <p class="text-center">Bedankt dat u ons contacteerde over  het onderwerp {{$subject}}. We zullen u vraag zo spoedig mogelijk beantwoorden.</p>
                            </th>
                            <th class="expander"></th>
                          </tr>
                        </table>
                      </th>
                    </tr>
                  </tbody>
                </table>
                <hr>
                <table class="row">
                  <tbody>
                    <tr>
                      <th class="small-12 large-12 columns first last">
                        <table>
                          <tr>
                            <th>
                            <p class="text-left"> Geachte {{$name}}! U contacteerde onze site door ons het volgend bericht te zenden.</p>
                            <div class="text-left black_white">{{$content}}</div>
                          <p class="text-left"> We zullen zo spoedig mogelijk uw vraag proberen te beantwoorden. U kan binnen nu en 2 weken een mailtje van ons verwachten.
                              Vindt u dat uw vraag toch dringend is dan kan u ons altijd contacteren op het nummer</p>
                            <div class="">
                                 <p class="text-center contactdata">09 361 13 33</p>
                            </div>

                              <center data-parsed="">
                                <table class="button success float-center">
                                  <tr>
                                    <td>
                                      <table>
                                        <tr>
                                          <td>
                                            <a href="http://chateau-meiland.test/">Ga terug naar de site</a>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </center>
                            </th>
                            <th class="expander"></th>
                          </tr>
                        </table>
                      </th>
                    </tr>
                  </tbody>
                </table>


    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
  </body>
</html>
