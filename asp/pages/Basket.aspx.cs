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
        basket.Items.Clear();
        if (Session.Count == 0)
            hideBasket();
        displayBasketRelatedStuff();
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
    }

    private void displayBasketRelatedStuff()
    {
        float price = 0;
        foreach (string key in Session)
        {
            string itemPriceString = Session[key].ToString();
            basket.Items.Add(key + ": " + itemPriceString + " zł");
            price += float.Parse(itemPriceString);
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
    }

    private float value(string radioButtonListId)
    {
        RadioButtonList list = FindControl(radioButtonListId) as RadioButtonList;
        string valueString = list.SelectedItem.Value;
        return float.Parse(valueString);
    }
}