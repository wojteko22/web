<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Form.aspx.cs" Inherits="Form" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" href="../css/main.css" /> 
    <link rel="stylesheet" href="../css/form.css" /> 
    <title>Formularz zgłoszeniowy</title>
</head>
<body>
    <div class="nav-main">
        <nav>
            Menu
            <ul>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="text-responsive.html">Trener</a></li>
                <li><a href="Form.aspx">Formularz</a></li>
            </ul>
        </nav>
    </div>
    <form id="form1" runat="server">
        <div>
            <table>
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
                <tr>
                    <td>Wiek w latach:</td>
                    <td>
                        <asp:TextBox ID="ageTextBox" runat="server" TextMode="Number"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="ageRequiredFieldValidator" runat="server"
                            ControlToValidate="ageTextBox" Display="Dynamic"
                            ErrorMessage="Wiek jest wymagany" ForeColor="Red">
                        </asp:RequiredFieldValidator>
                        <asp:CompareValidator ID="ageCompareValidator" runat="server" ErrorMessage="Musisz mieć ukończone 18 lat" ControlToValidate="ageTextBox" ForeColor="Red" Operator="GreaterThanEqual" ValueToCompare="18" Display="Dynamic" Type="Integer"></asp:CompareValidator>
                    </td>
                </tr>
                <tr>
                    <td>Doświadczenie w latach:</td>
                    <td>
                        <asp:TextBox ID="experienceTextBox" runat="server" TextMode="Number"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="experienceRequiredFieldValidator" runat="server"
                            ControlToValidate="experienceTextBox" Display="Dynamic"
                            ErrorMessage="Doświadczenie jest wymagane" ForeColor="Red">
                        </asp:RequiredFieldValidator>
                        <asp:RangeValidator ID="experienceRangeValidator" runat="server" ErrorMessage="Twoje doświadczenie jest nieodpowiednie, szukamy osób, które grają w piłkę 2-5 lat" ControlToValidate="experienceTextBox" ForeColor="Red" MaximumValue="5" MinimumValue="2" Display="Dynamic" Type="Integer"></asp:RangeValidator>
                    </td>
                </tr>
            </table>
            <p>
                <asp:Button ID="submitButton" runat="server" Text="Wyślij" />
            </p>
            <p>
                <asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label>
            </p>

        </div>
    </form>
</body>
</html>
