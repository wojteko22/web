﻿using System;
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
            Tuple<float, int> item = Session[key] as Tuple<float, int>;
            float itemPrice = item.Item1;
            int amount = item.Item2;
            basket.Items.Add(key + ": " + itemPrice + " zł, sztuk: " + amount);
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
}