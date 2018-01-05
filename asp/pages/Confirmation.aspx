<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Confirmation.aspx.cs" Inherits="pages_Confirmation" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Potwierdzenie</title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h2>Dziękujemy za złożenie zamówienia!</h2>
            <asp:Label ID="costInfo" runat="server"></asp:Label>
            <br />
            <asp:HyperLink ID="listLink" runat="server" NavigateUrl="~/pages/List.aspx">Wróć do listy produktów</asp:HyperLink>
        </div>
    </form>
</body>
</html>
