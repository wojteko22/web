using System;

public partial class Form : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack)
        {
            Validate();

            if (IsValid)
            {
                string name = nameTextBox.Text;
                string email = emailTextBox.Text;
                string phone = phoneTextBox.Text;
                string age = ageTextBox.Text;
                string experience = experienceTextBox.Text;
                outputLabel.Text =
                   String.Format("Przesłane dane:{0}Imię: {1}{0}Adres email: {2}{0}Numer telefonu: {3}{0}Wiek: {4}{0}Doświadczenie w latach: {5}",
                      "<br/>", name, email, phone, age, experience);
                outputLabel.Visible = true;
            }
        }

    }
}