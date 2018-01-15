<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">

    <div class="jumbotron">
        <asp:GridView ID="GridView1" runat="server" DataSourceID="LinqDataSource1" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" DataKeyNames="MessageID" PageSize="2">
            <Columns>
                <asp:BoundField DataField="MessageID" HeaderText="MessageID" InsertVisible="False" ReadOnly="True" SortExpression="MessageID" />
                <asp:BoundField DataField="Date" HeaderText="Date" SortExpression="Date" />
                <asp:BoundField DataField="Name" HeaderText="Name" SortExpression="Name" />
                <asp:BoundField DataField="Email" HeaderText="Email" SortExpression="Email" />
                <asp:BoundField DataField="Message1" HeaderText="Message1" SortExpression="Message1" />
            </Columns>
        </asp:GridView>
        <asp:LinqDataSource ID="LinqDataSource1" runat="server" EntityTypeName="" ContextTypeName="ProductsDataContext" TableName="Messages">
        </asp:LinqDataSource>
    </div>
</asp:Content>
