Private Sub Command1_Click()
If Text1.Text = "admin" And Text2.Text = "admin" Then
MsgBox ("successfully login")
Form4.Show
Else
MsgBox ("invalid username or password")
End If
End Sub
Private Sub Text1_Change()
End Sub
