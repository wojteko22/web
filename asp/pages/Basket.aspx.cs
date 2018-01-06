using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class pages_Basket : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        setAutoPostBacks();
        if (Session.Count == 0)
            hideBasket();
        if (!IsPostBack)
            updateBasketRelatedStuff();
    }

    private void setAutoPostBacks()
    {
        deliveryList.AutoPostBack = true;
        paymentList.AutoPostBack = true;
    }

    private void hideBasket()
    {
        basketInfo.Text = "Koszyk jest pusty";
        basket.Visible = false;
        submitButton.Enabled = false;
        clearButton.Enabled = false;
    }

    private void updateBasketRelatedStuff()
    {
        basket.Items.Clear();
        float price = 0;
        foreach (string key in Session)
        {
            Tuple<float, int> item = Session[key] as Tuple<float, int>;
            float itemPrice = item.Item1;
            int amount = item.Item2;
            ListItem listItem = new ListItem(key + ": " + itemPrice + " zł, sztuk: " + amount, key);
            basket.Items.Add(listItem);
            price += itemPrice * amount;
        }
        displayPrice(price);
        displayValue(price);
    }

    private void displayPrice(float price)
    {
        priceInfo.Text = "Łączna cena produktów wynosi " + price + " zł";
    }

    private void displayValue(float price)
    {
        float sum = price + value(deliveryList.ID) + value(paymentList.ID);
        valueInfo.Text = "Łączna wartość zamówienia wynosi " + sum + " zł";
        submitButton.PostBackUrl = "~/pages/Confirmation.aspx?charge=" + sum;
    }

    private float value(string radioButtonListId)
    {
        RadioButtonList list = FindControl(radioButtonListId) as RadioButtonList;
        string valueString = list.SelectedItem.Value;
        return float.Parse(valueString);
    }

    protected void addButton_Click(object sender, EventArgs e)
    {
        addButton.Enabled = false;
        increaseAmount();
        updateBasketRelatedStuff();
    }

    private void increaseAmount()
    {
        string key = basket.SelectedValue;
        Tuple<float, int> tuple = Session[key] as Tuple<float, int>; ;
        Session[key] = Tuple.Create(tuple.Item1, tuple.Item2 + 1);
    }

    protected void list_SelectedIndexChanged(object sender, EventArgs e)
    {
        updateBasketRelatedStuff();
    }

    protected void basket_SelectedIndexChanged(object sender, EventArgs e)
    {
        addButton.Enabled = true;
    }

    protected void clearButton_Click(object sender, EventArgs e)
    {
        Session.Clear();
        hideBasket();
        updateBasketRelatedStuff();
    }
}