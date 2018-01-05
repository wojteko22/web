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

        if (!IsPostBack)
            init();
        else
            displayOnlySelected();
    }

    private void init()
    {
        showSessionState();
        bind(tshirtsTable(), tshirtsCheckBoxList);
        bind(ballsTable(), ballsCheckBoxList);
        bind(mugsTable(), mugsCheckBoxList);
    }

    private void showSessionState()
    {
        label.Text = "Liczba produktów w koszyku: " + Session.Count;
    }

    private void bind(Hashtable table, CheckBoxList list)
    {
        list.DataSource = table;
        list.DataValueField = "Value";
        list.DataTextField = "Key";
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
        submitButton.Visible = true;
    }

    private void hideAllCheckBoxLists()
    {
        foreach (CheckBoxList control in FindControl("form2").Controls.OfType<CheckBoxList>())
            control.Visible = false;
    }

    private void displaySelectedList()
    {
        selectedList().Visible = true;
    }

    private CheckBoxList selectedList()
    {
        string value = categoryList.SelectedValue;
        return FindControl(value + "CheckBoxList") as CheckBoxList;
    }

    protected void submitButton_Click(object sender, EventArgs e)
    {
        saveSelectedItems();
        showSessionState();
    }

    private void saveSelectedItems()
    {
        foreach (ListItem item in selectedList().Items)
            saveIfSelected(item);
    }

    private void saveIfSelected(ListItem item)
    {
        if (item.Selected)
            Session[item.Text] = item.Value;
    }
}