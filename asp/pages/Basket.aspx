<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Basket.aspx.cs" Inherits="pages_Basket" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Koszyk</title>
    <style type="text/css">
        .label {
            font-size: x-large;
            font-weight: bold;
            display: block;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h2>Wybierz formę dostawy</h2>
            <asp:RadioButtonList ID="deliveryList" runat="server" OnSelectedIndexChanged="list_SelectedIndexChanged" AutoPostBack="true">
                <asp:ListItem Value="12" Selected="true">kurier</asp:ListItem>
                <asp:ListItem Value="9">poczta</asp:ListItem>
                <asp:ListItem Value="0">odbiór osobisty</asp:ListItem>
            </asp:RadioButtonList>
            <h2>Wybierz sposób płatności</h2>
            <asp:RadioButtonList ID="paymentList" runat="server" OnSelectedIndexChanged="list_SelectedIndexChanged" AutoPostBack="true">
                <asp:ListItem Value="0" Selected="true">karta</asp:ListItem>
                <asp:ListItem Value="1">przelew</asp:ListItem>
            </asp:RadioButtonList>
            <asp:Label ID="basketInfo" runat="server" Text="Zawartość koszyka:" CssClass="label"></asp:Label>
            <br />
            <asp:ListBox ID="basket" runat="server" OnSelectedIndexChanged="basket_SelectedIndexChanged" AutoPostBack="true"></asp:ListBox>
            <asp:Button ID="removeOneButton" runat="server" Text="-1" OnClick="removeOneButton_Click" Enabled="false"/>
            <asp:Button ID="addButton" runat="server" Text="+1" OnClick="addButton_Click" Enabled="false"/>
            <asp:Button ID="removeButton" runat="server" Text="Usuń wybrane" OnClick="removeButton_Click" Enabled="false"/>
            <asp:Button ID="clearButton" runat="server" Text="Opróżnij koszyk" OnClick="clearButton_Click"/>
            <asp:Label ID="priceInfo" runat="server" CssClass="label"></asp:Label>
            <asp:Label ID="valueInfo" runat="server" CssClass="label"></asp:Label>
            <asp:HyperLink ID="listLink" runat="server" NavigateUrl="~/pages/List.aspx">Wróć do listy produktów</asp:HyperLink>
            <br />
            <asp:Button ID="submitButton" runat="server" Text="Złóż zamówienie" />
        </div>
    </form>
</body>
</html>
