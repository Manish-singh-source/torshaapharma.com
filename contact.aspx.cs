using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Text;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class contact : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)

    {
        if (!IsPostBack)
        {
            txtyourname.Text = "";
            txtmsg.Text = "";
            txtemail.Text = "";
            TextBox2.Text = "";
            TextBox1.Text = "";

        }

    }


    protected void btnSend12_Click(object sender, EventArgs e)


    {
        if (TextBox2.Text != ""  && txtyourname.Text != "" && txtemail.Text != "" && txtmsg.Text != "" && TextBox1.Text != "")
        {

            #region mailtoTricil

            StringBuilder sb = new StringBuilder();
            #region infotable
            sb.Append("<table>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='630' cellspacing='0' cellpadding='0' border='1'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='630' cellspacing='0' cellpadding='0' border='0'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");

            //***************
            sb.Append("<td valign='middle' align='middle' style='background-color:#eee;'>    ");
            sb.Append("<table width='570' cellspacing='10' cellpadding='0' border='0'>");
            sb.Append(" <tbody>");
            sb.Append("<tr>");
            sb.Append(" <td valign='middle' align='left' style='width:75%'><img style='display: inline-block; position: relative; max-width: 100%' src='http://torshaapharma.com/images/logo/torshaa%20logo.png' width='60%' height='60%' border='0'></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("</td>");
            sb.Append(" </tr>");
            sb.Append(" </tbody>");
            sb.Append(" </table>");
            sb.Append(" </td>");
            //*****************
            sb.Append("</tr>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='620' cellspacing='20' cellpadding='0' border='0'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<font style='font-size: 13px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<b>Client Has submitted following data through our Online contact form</b>");
            sb.Append("</font></td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='580' cellspacing='5' cellpadding='0' border='0' bgcolor='#DCECF5'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='570' cellspacing='10' cellpadding='0' border='0'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<strong>Your  Name : </strong>");
            sb.Append("</font></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append(txtyourname.Text);
            sb.Append("</font></td>");
            sb.Append("</tr>");


            sb.Append("<tr>");
            sb.Append("<td valign='top' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<strong>Mobile No : </strong>");
            sb.Append("</font></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append(TextBox2.Text);
            sb.Append("</font></td>");
            sb.Append("</tr>");

            sb.Append("<tr>");
            sb.Append("<td valign='top' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<strong>Company Name : </strong>");
            sb.Append("</font></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append(TextBox1.Text);
            sb.Append("</font></td>");
            sb.Append("</tr>");

            sb.Append("<tr>");
            sb.Append("<td valign='top' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<strong>Email ID : </strong>");
            sb.Append("</font></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append(txtemail.Text);
            sb.Append("</font></td>");
            sb.Append("</tr>");




            sb.Append("<tr>");
            sb.Append("<td valign='top' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("<strong> Message : </strong>");
            sb.Append("</font></td>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append(txtmsg.Text);
            sb.Append("</font></td>");
            sb.Append("</tr>");


            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='600' cellspacing='10' cellpadding='0' border='0'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='center'>");
            sb.Append("<table width='580' cellspacing='0' cellpadding='0' border='0'>");
            sb.Append("<tbody>");
            sb.Append("<tr>");
            sb.Append("<td valign='middle' align='left'>");
            sb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sb.Append("Regards,<br />");
            sb.Append("Team Torshaa Pharma </span><br />");
            sb.Append("<span>Email : <a href='torshaa@torshaapharma.com'>torshaa@torshaapharma.com</a></span><br />");
            sb.Append("<span>Contact No :+91 98694 35303 </span>");
            sb.Append("<br />");
            sb.Append("</font></td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            sb.Append("</td>");
            sb.Append("</tr>");
            sb.Append("</tbody>");
            sb.Append("</table>");
            #endregion

            MailMessage mail = new MailMessage();
            mail.To.Add("torshaa@torshaapharma.com");
            mail.CC.Add("torshaa@torshaapharma.com");
            mail.From = new MailAddress("torshaa@torshaapharma.com", "Torshaa Pharma");
            mail.Subject = "Online Inquiry From Torshaa Pharma Website - Date" + string.Format("{0: dd MMMM yyyy hh:mm:ss}", DateTime.Now);
            mail.Body = Convert.ToString(sb);
            mail.IsBodyHtml = true;
            #endregion

            #region mailtoclient
            StringBuilder sbb = new StringBuilder();
            sbb.Append("<table>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='630' cellspacing='0' cellpadding='0' border='1'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='630' cellspacing='0' cellpadding='0' border='0'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");

            //***************
            sbb.Append("<td valign='middle' align='middle' style='background-color:#eee;'>    ");
            sbb.Append("<table width='570' cellspacing='10' cellpadding='0' border='0'>");
            sbb.Append(" <tbody>");
            sbb.Append("<tr>");
            sbb.Append(" <td valign='middle' align='left' style='width:75%'><img style='display: inline-block; position: relative; max-width: 100%' src='https://torshaapharma.com/images/logo/torshaa%20logo.png' width='inherit' height='inherit' border='0'></td>");
            sbb.Append("<td valign='middle' align='left'>");



            sbb.Append("</td>");
            sbb.Append(" </tr>");
            sbb.Append(" </tbody>");
            sbb.Append(" </table>");
            sbb.Append(" </td>");
            //*****************

            sbb.Append("</tr>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='620' cellspacing='20' cellpadding='0' border='0'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<font style='font-size: 13px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            //sbb.Append("<span><img style='max-width: 100%' src='http://solankiescorporates.com/images/email/contactus-banner.jpg' border='0'></span>");
            sbb.Append("</font></td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='580' cellspacing='5' cellpadding='0' border='0' bgcolor='#DCECF5'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='570' cellspacing='10' cellpadding='0' border='0'>");
            sbb.Append("<tbody>");

            sbb.Append("<tr>");
            sbb.Append("<td valign='top' align='left'>");
            sbb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sbb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sbb.Append("<p>Hi " + txtyourname.Text + ",</p>");
            sbb.Append("<p style='font-weight:bold;'>Thanks for showing your interest,</p>");

            sbb.Append("</font></td>");
            sbb.Append("</tr>");

            sbb.Append("<tr>");
            sbb.Append("<td valign='top' align='left'>");
            sbb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sbb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sbb.Append("<span>We are delighted to welcome you to the TORSHAA PHARMA family! We hope you enjoy using our services. We have created a request for you. Our business advisor will get in touch with you in the next 12 hours and guide you through all your requirements. In the meanwhile, If you have any specific queries you mail us at : torshaa@torshaapharma.com </span><br />");
            sbb.Append("<span>Please visit our Website : https://torshaapharma.com/ for more services. Our priority is to ensure that you get  help & support from our team business advisor as quick and stress-free as possible-by keeping you updated on the progress. Again, thank you for deciding to work with us. We hope we can give you the same satisfaction as what our loyal clients have been experiencing from us. We look forward to a long term relationship.</span><br />");

            sbb.Append("</font></td>");
            sbb.Append("</tr>");

            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='600' cellspacing='10' cellpadding='0' border='0'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='center'>");
            sbb.Append("<table width='580' cellspacing='0' cellpadding='0' border='0'>");
            sbb.Append("<tbody>");
            sbb.Append("<tr>");
            sbb.Append("<td valign='middle' align='left'>");
            sbb.Append("<font style='font-size: 12px' color='#333333' face='Arial, Helvetica, sans-serif'>");
            sbb.Append("Best Regards,<br />");
            sbb.Append("<span>Team Torshaa Pharma</span><br />");
            sbb.Append("<span>Email : <a href='torshaa@torshaapharma.com'>torshaa@torshaapharma.com</a></span><br />");
            sbb.Append("<span>Contact No : +91 98694 35303  </span>");
            sbb.Append("<br />");
            sbb.Append("</font></td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");
            sbb.Append("</td>");
            sbb.Append("</tr>");
            sbb.Append("</tbody>");
            sbb.Append("</table>");


            MailMessage mailClient = new MailMessage();
            mailClient.To.Add(txtemail.Text);
            mailClient.From = new MailAddress("torshaa@torshaapharma.com");
            mailClient.Subject = "Thanks for showing your interest " + string.Format("{0: dd-MM-yyyy}", DateTime.Now);
            mailClient.Body = Convert.ToString(sbb);
            mailClient.IsBodyHtml = true;
            #endregion


            SmtpClient smtp = new SmtpClient("smtp.gmail.com");//587
            smtp.Port = 25;
            smtp.Host = "smtp.gmail.com";
            smtp.Credentials = new System.Net.NetworkCredential
                 ("torshaa@torshaapharma.com", "Admin123#");
            smtp.EnableSsl = true;
            smtp.Send(mail);
            smtp.Send(mailClient);
            btnsubmit.Enabled = false;
            Response.Write("<script>alert('Your Massege Have Been Sent Successfully...'), window.location.href='index.aspx';</script>");

            cleartxtbox();


        }

    }


    public void cleartxtbox()
    {
        txtyourname.Text = "";
        txtmsg.Text = "";
        txtemail.Text = "";
        TextBox2.Text = "";
        TextBox1.Text = "";

    }
}