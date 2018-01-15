using System;
using System.Collections.Generic;
using System.Collections.Specialized;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class SecuredPages_Editing : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Insert_Click(object sender, EventArgs e)
    {
        ListDictionary insertParameters = new ListDictionary();     
        insertParameters.Add("AddingDate", DateTime.Now.ToShortDateString());
        insertParameters.Add("Name", Name.Text);
        insertParameters.Add("Price", Price.Text);
        balls.Insert(insertParameters);
        clearFields();
        ballsGridView.DataBind();
    }

    private void clearFields()
    {
        Name.Text = String.Empty;
        Price.Text = String.Empty;
    }
}