<%@ Page Language="C#" AutoEventWireup="true" CodeFile="List.aspx.cs" Inherits="pages_List" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" href="../css/main.css" />
    <title>Lista produktów do zakupu</title>
</head>
<body>
    <div class="nav-main">
        <nav>
            Menu
            <ul>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="text-responsive.html">Trener</a></li>
                <li><a href="Form.aspx">Formularz</a></li>
                <li><a href="List.aspx">Zakupy</a></li>
            </ul>
        </nav>
    </div>
    <form id="form2" runat="server">
        <div>
            <h3 class="aspLabel">Wybierz kategorię:</h3>
            <asp:RadioButtonList ID="categoryList" runat="server">
                <asp:ListItem Value="tshirts">koszulki</asp:ListItem>
                <asp:ListItem Value="balls">piłki</asp:ListItem>
                <asp:ListItem Value="mugs">kubki</asp:ListItem>
            </asp:RadioButtonList>

            <asp:CheckBoxList ID="tshirtsCheckBoxList" runat="server" Visible="false" CssClass="aspSecondList"></asp:CheckBoxList>
            <asp:CheckBoxList ID="ballsCheckBoxList" runat="server" Visible="false" CssClass="aspSecondList"></asp:CheckBoxList>
            <asp:CheckBoxList ID="mugsCheckBoxList" runat="server" Visible="false" CssClass="aspSecondList"></asp:CheckBoxList>

            <asp:Button ID="submitButton" runat="server" OnClick="submitButton_Click" Text="Dodaj do koszyka" Visible="false" CssClass="aspButton"/>
            <br />
            <asp:HyperLink ID="basketLink" runat="server" NavigateUrl="~/pages/Basket.aspx">Podsumowanie zamówienia</asp:HyperLink>
            <br />
            <asp:Label ID="label" runat="server"></asp:Label>
        </div>
    </form>
</body>
</html>
