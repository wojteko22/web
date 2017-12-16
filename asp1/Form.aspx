<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Form.aspx.cs" Inherits="Form" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <table class="auto-style1">
                <tr>
                    <td>Imię:</td>
                    <td>
                        <asp:TextBox ID="nameTextBox" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="nameRequiredFieldValidator" runat="server"
                            ControlToValidate="nameTextBox" Display="Dynamic"
                            ErrorMessage="Imię jest wymagane" ForeColor="Red">
                        </asp:RequiredFieldValidator>
                    </td>
                </tr>
                <tr>
                    <td>Adres e-mail:</td>
                    <td>
                        <asp:TextBox ID="emailTextBox" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="emailRequiredFieldValidator" runat="server"
                            ControlToValidate="emailTextBox" Display="Dynamic"
                            ErrorMessage="Adres email jest wymagany" ForeColor="Red">
                        </asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="emailRegularExpressionValidator" runat="server"
                            ControlToValidate="emailTextBox" Display="Dynamic"
                            ErrorMessage="Niepoprawny format adresu e-mail" ForeColor="Red"
                            ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">
                        </asp:RegularExpressionValidator>
                    </td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td>
                        <asp:TextBox ID="phoneTextBox" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server"
                            ControlToValidate="phoneTextBox" Display="Dynamic"
                            ErrorMessage="Numer telefonu jest wymagany" ForeColor="Red">
                        </asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator"
                            runat="server" ControlToValidate="phoneTextBox" Display="Dynamic"
                            ErrorMessage="Niepoprawny format numeru telefonu, wymagany to 123 456 789" ForeColor="Red"
                            ValidationExpression="\d{3} \d{3} \d{3}">
                        </asp:RegularExpressionValidator>
                    </td>
                </tr>
            </table>

        </div>
    </form>
</body>
</html>
