using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class pages_Confirmation : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        displayChargeInfo();
        Session.Clear();
    }

    private void displayChargeInfo()
    {
        string charge = Request.QueryString["charge"];
        costInfo.Text = "Opłata za całe zamówienie wyniosła " + charge + " zł";
    }
}