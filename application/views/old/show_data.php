<table>
                                                           
<tr>
<td style="FONT-SIZE: 12px;text-align:center">
</td>
</tr>
<?
for ($i = 0; $i <$row; $i++) {
?>
<tr>
<td style="FONT-SIZE: 12px;text-align:left">                                                  
</td>
<?        foreach ($dtl as $key=>$data) {           ?>
            <td style="FONT-SIZE: 12px;text-align:left">
            <?
               echo $data[$i];
            ?>
</td>
            <?       
            }
            ?>
</tr>   
                                                                                                 
<?
}
                                   
?>
</table>