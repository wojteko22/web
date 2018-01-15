﻿<%@ Page Title="" Language="C#" MasterPageFile="~/Site.master" AutoEventWireup="true" CodeFile="Editing.aspx.cs" Inherits="SecuredPages_Editing" %>

<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" Runat="Server">
    <div class="jumbotron">
        <asp:GridView ID="ballsGridView" runat="server" AutoGenerateColumns="False" BackColor="White" BorderColor="#DEDFDE" BorderWidth="1px" CellPadding="4" DataKeyNames="Id" DataSourceID="LinqDataSource1" ForeColor="Black" GridLines="Vertical" BorderStyle="None">
            <AlternatingRowStyle BackColor="White" />
            <Columns>
                <asp:BoundField DataField="Id" HeaderText="Id" ReadOnly="True" SortExpression="Id" />
                <asp:BoundField DataField="Name" HeaderText="Name" SortExpression="Name" />
                <asp:BoundField DataField="Price" HeaderText="Price" SortExpression="Price" DataFormatString="{0:c}" />
                <asp:BoundField DataField="AddingDate" HeaderText="Adding Date" SortExpression="AddingDate" DataFormatString="{0:d}" />
            </Columns>
            <FooterStyle BackColor="#CCCC99" />
            <HeaderStyle BackColor="#6B696B" Font-Bold="True" ForeColor="White" />
            <PagerStyle BackColor="#F7F7DE" ForeColor="Black" HorizontalAlign="Right" />
            <RowStyle BackColor="#F7F7DE" />
            <SelectedRowStyle BackColor="#CE5D5A" ForeColor="White" Font-Bold="True" />
            <SortedAscendingCellStyle BackColor="#FBFBF2" />
            <SortedAscendingHeaderStyle BackColor="#848384" />
            <SortedDescendingCellStyle BackColor="#EAEAD3" />
            <SortedDescendingHeaderStyle BackColor="#575357" />
        </asp:GridView>
        <asp:LinqDataSource ID="LinqDataSource1" runat="server" ContextTypeName="ProductsDataContext" EntityTypeName="" TableName="Balls">
        </asp:LinqDataSource>
    </div>

    <asp:TextBox ID="Name" runat="server"></asp:TextBox>
    <asp:TextBox ID="Price" runat="server"></asp:TextBox>
    <asp:Button ID="Insert" runat="server" Text="Insert" onclick="Insert_Click"/>
    <asp:LinqDataSource ID="balls" runat="server" ContextTypeName="ProductsDataContext" EnableInsert="True" EntityTypeName="" TableName="Balls"></asp:LinqDataSource>

</asp:Content>

