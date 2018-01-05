using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class pages_List : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        categoryList.AutoPostBack = true;
        bindAllData();
        if (IsPostBack)
            displayOnlySelected();
  
    }

    private void bindAllData()
    {
        bind(tshirtsTable(), tshirtsCheckBoxList);
        bind(ballsTable(), ballsCheckBoxList);
        bind(mugsTable(), mugsCheckBoxList);
    }

    private void bind(Hashtable table, CheckBoxList list)
    {
        list.DataSource = table.Keys;
        list.DataBind();
    }

    private Hashtable tshirtsTable()
    {
        Hashtable table = new Hashtable();
        table.Add("koszulka M", 30.00);
        table.Add("koszulka L", 35.00);
        table.Add("koszulka XL", 40.00);
        return table;
    }

    private Hashtable ballsTable()
    {
        Hashtable table = new Hashtable();
        table.Add("Tango 12", 400.00);
        table.Add("Europass", 730.00);
        table.Add("Jabulani", 900.00);
        return table;
    }

    private Hashtable mugsTable()
    {
        Hashtable table = new Hashtable();
        table.Add("kubek z Lewym", 30.00);
        table.Add("kubek z Milikiem", 28.00);
        table.Add("kubek z Kubą", 29.00);
        return table;
    }

    private void displayOnlySelected()
    {
        hideAllCheckBoxLists();
        displaySelectedList();
    }

    private void hideAllCheckBoxLists()
    {
        foreach (CheckBoxList control in FindControl("form2").Controls.OfType<CheckBoxList>())
            control.Visible = false;
    }

    private void displaySelectedList()
    {
        string value = categoryList.SelectedValue;
        CheckBoxList list = FindControl(value + "CheckBoxList") as CheckBoxList;
        list.Visible = true;
    }
}