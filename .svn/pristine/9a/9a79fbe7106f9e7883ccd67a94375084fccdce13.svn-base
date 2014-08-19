VERSION 5.00
Begin VB.Form Form1 
   Caption         =   "Form1"
   ClientHeight    =   1335
   ClientLeft      =   60
   ClientTop       =   345
   ClientWidth     =   3390
   LinkTopic       =   "Form1"
   ScaleHeight     =   1335
   ScaleWidth      =   3390
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command1 
      Caption         =   "Rollback History"
      Height          =   495
      Left            =   240
      TabIndex        =   0
      Top             =   360
      Width           =   2415
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
' Copyright 2002-2003.  Adobe Systems, Incorporated.  All rights reserved.
' This script will demonstrate how one can use the HistoryState object to
' "undo" commands.  In this example, the HistoryState is stored, and then
' 2 methods are called simply to modify the HistoryState.  When the ActiveHistoryState
' is reset to the previously saved HistoryState, the actions are "rolled back" to that
' state.  This essentially does an "undo" of the 2 methods called.

Private Sub Command1_Click()

Dim appRef As Photoshop.Application
Dim docRef As Photoshop.Document
Dim currentHistory As Photoshop.HistoryState

Set appRef = New Photoshop.Application

If appRef.Documents.Count > 0 Then
    Set docRef = appRef.ActiveDocument
Else ' open sample file
    FileName = appRef.Path & "\Samples\Dune.tif"
    Set docRef = appRef.Open(FileName)
End If
    
    Set currentHistory = docRef.HistoryStates(1)
    
    ' Do a couple of things to change the history state.  This adds
    ' 2 items to the HistoryStates collection.
    docRef.ActiveLayer.AdjustBrightnessContrast 30, 40
    docRef.ActiveLayer.AdjustLevels 20, 100, 2, 30, 120
    
    ' This rolls back the history to the beginning.
    ' The "beginning" refers to HistoryStates(1)
    docRef.ActiveHistoryState = currentHistory
    
End Sub

