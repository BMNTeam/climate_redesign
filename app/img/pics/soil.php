<?

require "climate_auth.php";

?>
<html>
<head>
	<title>������ ��������� ��������� ��������</title>
	
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
navHover = function() {
	var lis = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<lis.length; i++) {
		lis[i].onmouseover=function() {
			this.className+=" iehover";
		}
		lis[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" iehover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", navHover);
</script>
</head>


<body>
	<table cellpadding="0" cellspacing="0" align="center" height="100%" width="900" border="0">
		<tr>
			<td colspan="2" width="898" height="95" style="background: url(pics/title1.gif) no-repeat top left;"></td>
            <td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
		</tr>
        <tr>
			<td colspan="2" width="898" height="25" style="background: url(pics/menu_ln.gif) repeat-x top left;"></td>
            <td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
        </tr>
        <tr>
			<td colspan="2" bgcolor="white" width="898" height="5"></td>
            <td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
		</tr>
		
	<!-- ����� �������� -->
	<!-- ���� �������� -->
		<tr align="center">

			<td colspan="2" bgcolor="white" width="898" valign="top">
			<table width="100%" cellpadding="10" cellspacing="0" class="table_border">
			<tr width="100%" valign="top" bgcolor="#F2F2F2">
			<td colspan="7" valign="top" bgcolor="#F2F2F2">
			<span class="header1"><center>�������������-������������� ������� ��� ��������������� ����</center></span>
			</td>
			</tr>
				<tr width="100%" valign="top" bgcolor="#F2F2F2">
					<td width="15%" align="center" valign="top">
					<a href="http://sniish.ru/">��������</a>
					</td>
					<td width="15%" align="center" valign="top">
					<a href="menu_climate.php">���� ���</a>
					</td>
					<td width="15%" align="center" valign="top">
					
					<a href="#" onclick="window.open('legend_meteostations.php','newWin','width=780,height=750')">������������ ����</a>
					
					</td>
					<td width="15%" align="center" valign="top">
					<a href="climate_describe.php">��������</a>
					</td>
					<td width="15%" align="center" valign="top">
					<a href="climate_license.php">��������</a>
					</td>
					<td width="15%" align="center" valign="top">
					<a href="climate_help.php">������</a>
					</td>
					
					<td width="10%" align="center" valign="top">
					<a href="climate_auth.php?action=logout">�����</a>
					</td>
				</tr>
			</table>
			
			</td>
			<td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
		</tr>
	<!-- ����� �������� -->
	<!-- ���� �������� -->
		<tr align="center">

			<td colspan="2" height="100%" bgcolor="white" width="898" valign="top">		
				<table height="100%" width="100%" cellpadding="10" cellspacing="0" border="0" valign="top">
				<tr width="100%" valign="top">
					<td valign="top" height="10">
						<span class="header1"><center>������ ��������� ��������� ��������</center></span>
						<span class="header2"><center>�������� � ������</center></span>
					</td>
				</tr>
				<tr>
					<td align="center" valign="top">
								
					<p>
					� ������������� �������� ���������� ��������������� ���� ��������� ������� ������ �� ���������� ������������ �� ������������ ���������. ����� ����������� ������ ������� �� ����������� � �������-��������� ��������� �������� ������� � ������� (���. 1).
					</p>
					<p>
					��������� �������������� ������������� ������������� �������� �������� � ���� �������������� ����� �� ������� ����� 1500 �, � ������ ������������� ����������� � 3000 �. �� ���� ���������� ����������� ����� ��������� �����, �� ������� ���������� ����� �������� ������������ (��������-����������) ������� ���������.
					</p>
					<p>
					�� �������� ��������� � � ������ ������ �������������� ������������� �������� �������������� ������������������ ������� � ������������ ���������� ����������� �����, ������ ������� �������� �� �������������� ��������� �� ����������� ��� � �������� � ������������ ������������ �������� � ���������� � ������������� ����������.
					</p>
					<p>
					������� � ������������ �����, �������������� �� ���������� ������ � ���������� � ������������� ����������, �� ����� ���������� ���������������� � ���������������� ������� �������� ���������� �������� ��������, ��� ������ ��������� ����������� �������� ������� ��������-������������� ���������������.
					</p>
					<img src="pics/geology.jpg" width="880">
					<span class="italic_text"><center>
					������� 1 - ������������� ����� ��������������� ���� (����������� � ������������, 1958) 
					</center></span>
					<p>
					������� �������������� ������������� ����������� ������ ����������� � ����������, ��� �������� ����� ���������� ����� � �����. ������ ������ ���������� �����, ��������� ������� � �������, ������������ �������� ���������� ��������� � �����������������. � ���� ������������� 9,3 ���. �� �������� � 46,5 ���. �� ���������� ������. � ���������� ������� ���������� �������� ������� �� �������������� �������������, ��������������� �������, ������������ ������ � ����.
					</p>
					<p>
					�� ���������, �������� � �������� �������� �������������� ������������� ���������� ����� ������ ������������, ������������� � ������ ��������� ����������� ����� ��������� � �������. ����� ������������� ������������� ��� �� ��������������� ������� ������� ������������������� �������������� ��������.
					</p>
					<p>
					���������� ���� ����� ����� ���������� �������������� �������, ����������������� ��������� ����� �� 5 �� 1542 � ��� ������� ���� (���� ������). ��� ������������ ��������� ��� ��� ������������ �������������, ��� � ������������-�������������� ���������, � ����� ������������ ������, ������, ����, ������� � �������� � ����� ������� ��� �����������. ��������� ��������� � ��������� ����� ���, ������� �� ����������� ������������� �� 220.
					</p>
					<p>
					� �������� ���� ������ ������� �������� ������� ������������ ���������� �������. ���������� ������ �������� ������� �������� �� ��������� ����� ������: ��������� (� �������� �� 1209 �), ���������� (�� 1463 �), ����������� (�� 1541 �) � ������������ (�� 1605 � � �������� ����).
					</p>
					<p>
					���������� ��������� �������: ������������, ���������������, ������������ � ������-����������� ��������� �������� ��������-��������������� ���������� ������, ������ ����� �������� ��������� ������ 852 ������, �� �������������� �������������. �� ��������������� ������� ���������� ������������ ����������� ������������� �����, ��������� �� 17 ���������� ������������� ���.
					</p>
					<p>
					�������� ����� ���������� ���� �������� �������������� �������, ����������� ����� ������� ������������ �������������� ��������������, ������� �������� ��� ��������� �� ��������� ���������� ������� (�������������� � ������������� ������, ���� �����������, �������, ���� � ��.).
					</p>
					<p>
					���� ���������� (832 �) �������� �� ������ ����� ������� ������ �������������� �������������, �� � ���� ������� �������.
					</p>
					<p>
					�������������� ������ ��������� �� ���-������� � ����� ������ ������������ ������. ������ �. ������ �������� �������������� �� ������������� �����, �������������� ����� ������� � ������ �� �� �� 140�� � ��������� ��������� �� 300 ������ (�. �����) �� ������ �� 688 ������ �� ��� (�. ����). � �������� �������������� ������������� ��������� ��� ������������ ��������� � ������������� � ���������� � ��������� �� 200 �� 230 ������ ��� ������� ����. �������������� ������������� �� ������-������, ������-������� � ������� ���������� ��������� � �����-��������� �����������, ����-��������� ������� � ������-������� �����������.
					</p>
					<p>
					����-��������� ������� ����������� � ��������� ����� �������������� � ����������� ���������������, ����� �������������� 270 �� � �������� ����. ��� �������� �������� �������, ������������ �������� � ���������� ����. � ��������� ����� ��� ������� ������ ������� ����������� ����, ������ ������ � ����� �����.
					</p>
					<p>
					������-������� �����������, �������������� �� ������� ����, �������� ������ ������������� �����������. �������� ������� ������� ���������� � ���-������ �� ���������� ������������� (300�320 �) �� ������-������ � ������-������� ����������� (10�100 ������). ������� � ����������� ��������� ����� ���� ���������� ��������� ���������, ��������������� ���������� ��������, ��������� � ��������� ���� �������.
					</p>
					<p>
					������������ ������ ���� �������� ��������� ��������� (��������������, �����������, �������������, ���������), � ������� �������� ������� ���-�������� ������ �������������� ������������� ������� ������ ���������� �����, ��� ���������� ������� �������� �� ������ � �������� ������� ����, �� � � �������� ������-��������� ������� �������������� ����.
					</p>
					<p>
					������������� ���������� ���� �� ������� ��� ������� ���� ������������ �� ������� 2 � � ������� 1.
					</p>
					<span class="italic_text"><center>
					������� 1 � ����������� �������� ���������� � ���������� ����������� ����� � �������������� ����
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">� ��</span></td>
									<td align="center" valign="center"><span class="black">�������� �����, �</span></td>
									<td align="center" valign="center"><span class="black">��������������</span></td>
									<td align="center" valign="center"><span class="black">�������, ��2</span></td>
									<td align="center" valign="center"><span class="black">������� �� ��������� � ������� ����, %</span></td>
								</tr>
								
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">1</span></td>
									<td align="center" valign="center"><span class="grey">0-50</span></td>
									<td align="center" valign="center" rowspan="2"><span class="grey">�����������</span></td>
									<td align="center" valign="center"><span class="grey">6365</span></td>
									<td align="center" valign="center"><span class="grey">9,61</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">2</span></td>
									<td align="center" valign="center"><span class="grey">50-100</span></td>
									<td align="center" valign="center"><span class="grey">9892</span></td>
									<td align="center" valign="center"><span class="grey">14,94</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">16257</span></td>
									<td align="center" valign="center"><span class="grey_bold">24,55</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">3</span></td>
									<td align="center" valign="center"><span class="grey">100-150</span></td>
									<td align="center" valign="center" rowspan="2"><span class="grey">��������� �������</span></td>
									<td align="center" valign="center"><span class="grey">11720</span></td>
									<td align="center" valign="center"><span class="grey">17,70</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">4</span></td>
									<td align="center" valign="center"><span class="grey">150-200</span></td>
									<td align="center" valign="center"><span class="grey">10890</span></td>
									<td align="center" valign="center"><span class="grey">16,44</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">22610</span></td>
									<td align="center" valign="center"><span class="grey_bold">34,14</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">5</span></td>
									<td align="center" valign="center"><span class="grey">200-250</span></td>
									<td align="center" valign="center" rowspan="3"><span class="grey">������� �������</span></td>
									<td align="center" valign="center"><span class="grey">7140</span></td>
									<td align="center" valign="center"><span class="grey">10,78</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">6</span></td>
									<td align="center" valign="center"><span class="grey">250-300</span></td>
									<td align="center" valign="center"><span class="grey">4812</span></td>
									<td align="center" valign="center"><span class="grey">7,27</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">7</span></td>
									<td align="center" valign="center"><span class="grey">300-350</span></td>
									<td align="center" valign="center"><span class="grey">3692</span></td>
									<td align="center" valign="center"><span class="grey">5,57</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">15644</span></td>
									<td align="center" valign="center"><span class="grey_bold">23,62</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">8</span></td>
									<td align="center" valign="center"><span class="grey">350-400</span></td>
									<td align="center" valign="center" rowspan="3"><span class="grey">�������������</span></td>
									<td align="center" valign="center"><span class="grey">3148</span></td>
									<td align="center" valign="center"><span class="grey">4,75</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">9</span></td>
									<td align="center" valign="center"><span class="grey">400-450</span></td>
									<td align="center" valign="center"><span class="grey">2439</span></td>
									<td align="center" valign="center"><span class="grey">3,68</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">10</span></td>
									<td align="center" valign="center"><span class="grey">450-500</span></td>
									<td align="center" valign="center"><span class="grey">2154</span></td>
									<td align="center" valign="center"><span class="grey">3,25</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">7741</span></td>
									<td align="center" valign="center"><span class="grey_bold">11,68</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">11</span></td>
									<td align="center" valign="center"><span class="grey">500-600</span></td>
									<td align="center" valign="center" rowspan="4"><span class="grey">������� ������� � �����, ���������� �������</span></td>
									<td align="center" valign="center"><span class="grey">1987</span></td>
									<td align="center" valign="center"><span class="grey">3,00</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">12</span></td>
									<td align="center" valign="center"><span class="grey">600-700</span></td>
									<td align="center" valign="center"><span class="grey">820</span></td>
									<td align="center" valign="center"><span class="grey">1,24</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">13</span></td>
									<td align="center" valign="center"><span class="grey">700-800</span></td>
									<td align="center" valign="center"><span class="grey">376</span></td>
									<td align="center" valign="center"><span class="grey">0,57</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">3183</span></td>
									<td align="center" valign="center"><span class="grey_bold">4,81</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">14</span></td>
									<td align="center" valign="center"><span class="grey">800-900</span></td>
									<td align="center" valign="center" rowspan="5"><span class="grey">�����- � �����������</span></td>
									<td align="center" valign="center"><span class="grey">232</span></td>
									<td align="center" valign="center"><span class="grey">0,35</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">15</span></td>
									<td align="center" valign="center"><span class="grey">900-1000</span></td>
									<td align="center" valign="center"><span class="grey">165</span></td>
									<td align="center" valign="center"><span class="grey">0,25</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">16</span></td>
									<td align="center" valign="center"><span class="grey">1000-1500</span></td>
									<td align="center" valign="center"><span class="grey">391</span></td>
									<td align="center" valign="center"><span class="grey">0,59</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">17</span></td>
									<td align="center" valign="center"><span class="grey">>1500</span></td>
									<td align="center" valign="center"><span class="grey">5</span></td>
									<td align="center" valign="center"><span class="grey">0,01</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">�����</span></td>
									<td align="center" valign="center"><span class="grey_bold">793</span></td>
									<td align="center" valign="center"><span class="grey_bold">1,2</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center" colspan="3"><span class="grey_bold">����� �� ����</span></td>
									<td align="center" valign="center"><span class="grey_bold">66228</span></td>
									<td align="center" valign="center"><span class="grey_bold">100</span></td>
								</tr>
							</table>
							<img src="pics/relief.jpg" width="880">
							<span class="italic_text"><center>
					������� 2 � ���������������� ����� ��������������� ���� (��������, 2006)
					</center></span>
					<p>
					�������� ���� ������ ����������� ������� � ���������� ���� �������������� ������������� (����� 500 �) �������� ������ 6 % ����������, ������������� (350� 500 �) � 11,7 %, ������� ������� (200�350 �) � 23,6 % (����. 11), ��������� ������� (100�200 �) � 34,1 %, ����������� (10�100 �) � 24,6 %. ����� �������, ���� ��������� ���������� � ���� ���������� 82,3 %.
					</p>
					<p>
					��� ������ �������������� � �������������� ������ ��������������������� ���������� �� �������. ��� ��������������������� �������������, � ��� ����� ��������� ��������������������� �������� �������� 82,1 % ���� ������ (����. 2).
					</p>
					<span class="italic_text"><center>
					������� 2 � ������� ������� ������ �������� �� ������ �.-�. ����������
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">�����</span></td>
									<td align="center" valign="center"><span class="black">�������, ��2</span></td>
									<td align="center" valign="center"><span class="black">%</span></td>
								</tr>
								
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� 1</span></td>
									<td align="center" valign="center"><span class="grey">3833578</span></td>
									<td align="center" valign="center"><span class="grey">63,2</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">1-2</span></td>
									<td align="center" valign="center"><span class="grey">1145457</span></td>
									<td align="center" valign="center"><span class="grey">18,9</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">2-5</span></td>
									<td align="center" valign="center"><span class="grey">763237</span></td>
									<td align="center" valign="center"><span class="grey">12,6</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">5-7</span></td>
									<td align="center" valign="center"><span class="grey">159490</span></td>
									<td align="center" valign="center"><span class="grey">2,6</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">7-10</span></td>
									<td align="center" valign="center"><span class="grey">95135</span></td>
									<td align="center" valign="center"><span class="grey">1,6</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� 10</span></td>
									<td align="center" valign="center"><span class="grey">64607</span></td>
									<td align="center" valign="center"><span class="grey">1,1</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="grey_bold">�����:</span></td>
									<td align="center" valign="center"><span class="grey_bold">6061504</span></td>
									<td align="center" valign="center"><span class="grey_bold">100</span></td>
								</tr>
							</table>
					<p>
					� �� �� ����� ������������� �������� ���������� ���� � ��� ������ ���������� ������� �������� � ����� ���������� ������� ��� ��������� ���������, ��� ��������� � ������������� ����, �������� �������� �������� � ���� � ������� �������� ���������, ����������� � �������� ������ ����.
					</p>
					<span class="header2"><center>�����</center></span>
					<p>
					��������� ���������������� �������� �� ����������� �������� ������������ ���������. ������� ����� ��� ��������� ���������� ������������ ������������ ������������ ����������, �� ������-������� ���� ������������ ���������� ����������� ����������, � �� ������� � ������� ������������������ �������������, ��������������� � ���������� ������������ ������� ��� ������ � ����. �� ������� � ������-������� ���� ������ �������������� ������������ ���������� ������� � �������, ������������ � �����������-������� ��������� (�����, ��������, ������) (���. 3).
					</p>
					<img src="pics/mother_soil.jpg" width="880">
							<span class="italic_text"><center>
					������� 3 � ����� ��������������� ����� ��������������� ���� ("���������������������", 1977)
					</center></span>
					
					<p>
					����� ����������� ��������� ��������� 35�40 ������, ���������� �� 20 ������ � ����� � ��������� ������ ��������� ���������� ����. ��� ���������� ������� �������������� ��� �� �������� ���������, ��� �� ������� � ���������, ���������� ����������, ������� �������� � ������. ��� ������ ��������������� �������� ������������� ���������� ������� � �����, � �� ��� �������� �������� ����������� ����� ���� � ��������� � ���������� �����.
					</p>
					<p>
					�� �������������� ������������� ����� ������������ �� ����������-������������ ����������, ������ ������� ����� � ����������, ��������� � ����������� ���� � ��������.
					</p>
					<p>
					� ���������� � ������������� ���������� ���������������� �������� �������� ���������� ��������� ���������� � ���������� �����. ���������� ���������� ����� �������� �������������� ���������� ���������� (3,6 %), � � ������ ������� �������� ������������ ������ ��� �������� � ������� � ������� ������� �������. �� ��� �������������� ��������� ������ ������������.
					</p>
					<p>
					�� ���������� ������������ ���������� ��� ������������� ���� ����, ���������� ������������ � ����������: ��������� � ���������� �����. ������ ���������� � ��� �������� ����� � �������� ����� 38 % ���������� ����, ������ � � ��������� �� ������� 43 %. ��������� ���������� ���� ������������ ���������, �����������, �������, ����������, �������� � ������� �������.
					</p>
					<p>
					����� ���������� ���������� ������������, ��������, ������������, �����, � ����� ���������� ���� � �����-����������, ����������, ������-���������� � �� ������������ ��������.
					</p>
					<p>
					������������ � �������� ��������� ���������� � ���������� � ����������� ����� �������������� ������������� � ������������� ��������������� �� �������� (1,0 %). ��������� ����� ������� ��������� ������� (����� 70 ��) �� ������� ����� ������ ���������� � ���������� ����, ������� 10 % ����������. ����������� � ���� ��������� ������������ (20,8 %). ������ ������������ ��������� ������� ���������� �������������� ������� �� ����� ������������ � �������� � ����������� ����, ���������� � ������������� ���������. ������� ��, �� ������ ��������, ���������� 7 % ���������� ����.
					</p>
					<p>
					� ��������� ���������� ���� �������������� ��������� ��������������: � ���, ���-������� �� ����� ������� � ����������� � ����������� ���������� �����-���������� ����� (20 %), ������� ������ ��������� ���������������� ������. �� ���� ����������� � ������ � ������-������ ��� ���������� ��������� ����������� ������� (17 %), �� � ���� ������� � ������������� � ����������� ���� ������� ��������, ������� �� ������� �������� ������ ��� ���������� ����������� ��������� ����������. ������-���������� ����� (6 %) �������� ��������������� ����� � ������ ���������� � ������������ ������������� �����������. ����� ��������� ������ ������������� �����������: � ���������, �����������, �������.
					</p>
					<p>
					���������� ����� ����������� ��� �������� ���������� ����������� �������������� �� �������� ������������ �������� �� ���� 50�70 %. ����� �������� ����������� ����, ��� � ������, ��� �������� ����������� ���������, �. �. �������� ������� ��������� � ����������� �����. ������ ������ � ��������� ���� �� ��������� 90�120 �/��. ������ ������������� � �������� ����� ����������� ����������� ����� ������� ������, ������� ��� ������� ���� �������� � �������� ����� � ���� ������������ � ����� ��������� ����������� ����������.
					</p>
					<p>
					������� � ���������� ����� �������� �������������� � ���� ���������� ����, � � ���� ���������� ��� �������� ��������������� ����� � �������� �������������� ���������. �� ����� ������� ���������� ����� 1,5 ��� ��. ������� �������� ��������������� �������, ���� ����� ����������� � ���������� � ������� �������, ������� � ��� ������� �� 5 �� 50 %.
					</p>
					<p>
					� ��������������� ��������� ���������� � ����������� ������� ����� ������������ ��������, ���������� ���������������� ����������� ����������: ��������� ����������, ������� ����������, ������ �����������. ��� �������� ������� � �������� � ������������ ��������� �������� ��������� ������ � ���������� ����� 15�20 % �� ������� ����������. ����� � ����������� ��������� ������ �� 3�5 �� 15�20 % ������� � ������������.
					</p>
					<p>
					� ���������� �������� �� ������� 35�40 �� � ������������� ��������� ������� ��������� ��������� � ���� ����������, � ����������� �������� ���������� �������� ������ 50�70 ��. ������� ���������� ��������������� �����������������, ����������� � ����������������� � ��������� (���. 4). ����������� ����������� ������� (�������������), ������� ����� � ��������� ����������� ��������� ���� ������ � ����� ������. ���� �������� ��������������� ����������, ������-������������ � �����-���������� �������, ������� �������� ������ ���������� ������� ��������, ������� �� ��� ���������� ����������� �������������� �������������������� ������� � ����, �������� ��������, ��� ������������� �� ��� ��������.
					</p>
					<img src="pics/granylometric.jpg" width="880">
							<span class="italic_text"><center>
					������� 4 � ����� ������������������� ������� ���� ��������������� ���� ("���������������������", 1977)
					</center></span>
					<p>
					��������� ������ ���������� ��������������� ���� (���. 5) ���������� ������ �������������� ��� � ���������� ����������, ��� � � �� ���������������� �������.
					</p>
					<img src="pics/soil.jpg" width="880">
							<span class="italic_text"><center>
					������� 5 � ��������� ����� ��������������� ���� (������, 1979)
					</center></span>
					<p>
					��������� ���������� ���� ���� � ����� ��������������������. ���������� ������������� �������� � ������ �����, ������������ �� ����������, � ������� �� ���� ������ � 2,69 % ��� 3,75 % � ������������� ����. ������� ����� � ������ ����������� ������������� �������� ���������� 88,6 %, ������� � 10,4 % � ������� � 1 %. ���������������� ���� ������� � ���-������ �� ������-������ ���� (���. 6).
					</p>
					<img src="pics/gymys.jpg" width="880">
							<span class="italic_text"><center>
					������� 6 � ����������� ���������� ������ � �������� ���� ���� ��������������� ����
					</center></span>
					<p>
					� ���� �� ����������� ���������� � �������� ���� ����� (� 74 �� 23) � �������������������� ������ (� 74 �� 19 ������) (���. 7, ����. 3).
					</p>
					<img src="pics/bonitet.jpg" width="880">
							<span class="italic_text"><center>
					������� 6 � ������������ �������������� ���� ����� ��������������� ���� �� ������ �������� (100 ������ - �������� �������� ������ �����������)
					</center></span>
					<span class="italic_text"><center>
					������� 3 � ������������ �������������� ��������� ������ ���������������� ������� ��������������� ����
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center" rowspan="2"><span class="black">������</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">�����</span></td>
									
								</tr>
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">�������������������� ������</span></td>
									<td align="center" valign="center"><span class="black">�����</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������</span></td>
									<td align="center" valign="center"><span class="grey">23</span></td>
									<td align="center" valign="center"><span class="grey">27</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">29</span></td>
									<td align="center" valign="center"><span class="grey">33</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�����������</span></td>
									<td align="center" valign="center"><span class="grey">24</span></td>
									<td align="center" valign="center"><span class="grey">29</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�����������</span></td>
									<td align="center" valign="center"><span class="grey">31</span></td>
									<td align="center" valign="center"><span class="grey">33</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">19</span></td>
									<td align="center" valign="center"><span class="grey">23</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������</span></td>
									<td align="center" valign="center"><span class="grey">51</span></td>
									<td align="center" valign="center"><span class="grey">56</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������</span></td>
									<td align="center" valign="center"><span class="grey">40</span></td>
									<td align="center" valign="center"><span class="grey">41</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">39</span></td>
									<td align="center" valign="center"><span class="grey">41</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">42</span></td>
									<td align="center" valign="center"><span class="grey">47</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�������</span></td>
									<td align="center" valign="center"><span class="grey">33</span></td>
									<td align="center" valign="center"><span class="grey">41</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">50</span></td>
									<td align="center" valign="center"><span class="grey">51</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������</span></td>
									<td align="center" valign="center"><span class="grey">43</span></td>
									<td align="center" valign="center"><span class="grey">44</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�����������</span></td>
									<td align="center" valign="center"><span class="grey">36</span></td>
									<td align="center" valign="center"><span class="grey">39</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">48</span></td>
									<td align="center" valign="center"><span class="grey">51</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">56</span></td>
									<td align="center" valign="center"><span class="grey">58</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">46</span></td>
									<td align="center" valign="center"><span class="grey">53</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">48</span></td>
									<td align="center" valign="center"><span class="grey">51</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��������������</span></td>
									<td align="center" valign="center"><span class="grey">59</span></td>
									<td align="center" valign="center"><span class="grey">63</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�����������������</span></td>
									<td align="center" valign="center"><span class="grey">58</span></td>
									<td align="center" valign="center"><span class="grey">59</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">49</span></td>
									<td align="center" valign="center"><span class="grey">57</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�������������������</span></td>
									<td align="center" valign="center"><span class="grey">74</span></td>
									<td align="center" valign="center"><span class="grey">74</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">42</span></td>
									<td align="center" valign="center"><span class="grey">45</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">55</span></td>
									<td align="center" valign="center"><span class="grey">56</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������</span></td>
									<td align="center" valign="center"><span class="grey">55</span></td>
									<td align="center" valign="center"><span class="grey">56</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">68</span></td>
									<td align="center" valign="center"><span class="grey">71</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������</span></td>
									<td align="center" valign="center"><span class="grey">51</span></td>
									<td align="center" valign="center"><span class="grey">55</span></td>
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="left" valign="center"><span class="grey_bold">� ������� �� ����</span></td>
									<td align="center" valign="center"><span class="grey_bold">45</span></td>
									<td align="center" valign="center"><span class="grey_bold">48</span></td>
								</tr>
							</table>
					<p>
					����������� ����� ���� ����� ������� � ������� ������� ���������� �������� �����, ������� ���������� ���� � ������ � ����� ������. ������� ����� � ������ ����������� ���������� ������� ���������� 32,4 %, ������� � 50,7 � ������� � 16,9 %. ����� �� ������� � ������� ����������� ��������� ����� �������� 96,4 % ������� �����.
					</p>
					<p>
					���������� � ���� ������� � � ������������� �������� ����������� �������, ������� � ������� ���������� �� ����� � 42�48, ������� � 10�11, ����� � 20 ��/��. ������ �������� ������������ � ������ �����: ���� � ������ ����������� ������ ���������� �� 1 % ������, � � ������ ����������� ���������� ������� � �� 1,4 %.
					</p>
					<p>
					������������ ���� ��������������� ���� �������� �� ������� ������������ ��������������� ���������� � �������������� ����������: ������������� 81,1 % ������������� � 54,6 % ����� (����. 4).
					</p>
					<span class="italic_text"><center>
					������� 4 � ������� ��������� ���� ��������������� ���������� � �������������� ����
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center" rowspan="2"><span class="black">��������������� � ��������������� �����</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">�������������������� ������</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">�����</span></td>
									
								</tr>
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">��</span></td>
									<td align="center" valign="center"><span class="black">%</span></td>
									<td align="center" valign="center"><span class="black">��</span></td>
									<td align="center" valign="center"><span class="black">%</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��������� � ����������</span></td>
									<td align="center" valign="center"><span class="grey">1367250</span></td>
									<td align="center" valign="center"><span class="grey">24,2</span></td>
									<td align="center" valign="center"><span class="grey">566560</span></td>
									<td align="center" valign="center"><span class="grey">14,4</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������� � ������������</span></td>
									<td align="center" valign="center"><span class="grey">796808</span></td>
									<td align="center" valign="center"><span class="grey">14,1</span></td>
									<td align="center" valign="center"><span class="grey">339732</span></td>
									<td align="center" valign="center"><span class="grey">8,7</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�������������</span></td>
									<td align="center" valign="center"><span class="grey">754178</span></td>
									<td align="center" valign="center"><span class="grey">13,3</span></td>
									<td align="center" valign="center"><span class="grey">404670</span></td>
									<td align="center" valign="center"><span class="grey">10,3</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�������������</span></td>
									<td align="center" valign="center"><span class="grey">913886</span></td>
									<td align="center" valign="center"><span class="grey">16,1</span></td>
									<td align="center" valign="center"><span class="grey">519570</span></td>
									<td align="center" valign="center"><span class="grey">13,2</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�����, ����������� ���������� ����������� ������ � ��������</span></td>
									<td align="center" valign="center"><span class="grey">123830</span></td>
									<td align="center" valign="center"><span class="grey">2,2</span></td>
									<td align="center" valign="center"><span class="grey">84936</span></td>
									<td align="center" valign="center"><span class="grey">2,2</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������</span></td>
									<td align="center" valign="center"><span class="grey">361126</span></td>
									<td align="center" valign="center"><span class="grey">6,4</span></td>
									<td align="center" valign="center"><span class="grey">119251</span></td>
									<td align="center" valign="center"><span class="grey">3,0</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������</span></td>
									<td align="center" valign="center"><span class="grey">46865</span></td>
									<td align="center" valign="center"><span class="grey">0,8</span></td>
									<td align="center" valign="center"><span class="grey">7539</span></td>
									<td align="center" valign="center"><span class="grey">0,2</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����������</span></td>
									<td align="center" valign="center"><span class="grey">228477</span></td>
									<td align="center" valign="center"><span class="grey">4,0</span></td>
									<td align="center" valign="center"><span class="grey">102834</span></td>
									<td align="center" valign="center"><span class="grey">2,6</span></td>
								</tr>
							</table>
					<p>
					������ �������������� ����������, �� 80 % ������������� ������ ������, �������� ������ � �������� ����. �� ���������� � ������ ������� �������������� �������������� � �������������� �������������������� ������������ � ��������� ��������. ����� ���������� ��������� 31,6 % ������������������� ������, � ��� ����� 25,7 % ����� � 40,9 % �������.
					</p>
					<p>
					��������� ������� (��������� ����������� � ���������� ���������� �������), ��� �������������� � ��������������� �������������� � ��������� 30 ��� �������� ������ ������. � ���� �� � ��������� ����� ����������� ���������� ��������� �������� ���������� ������� � ������-�����-������� ������ ��� ������������� ��������� ����� ����� �����������, ��� ����������� ��������� ���������� � �������� ����. ����� 20-������� �������� ������� ���� ���������� � 2003 �. � 10 ������� ����, � � 2009 �. ���������� ��������� ���������� �������� �� ������ ������.
					</p>
					<p>
					������������� ���������� ��������� ���������. ���� � 1956 ���� � ����� ���� ���� 180 ���. �� ������ ���� (������, 1956), 1985 �. � 384,7 ���. ��, �� � 2000 ���� � ��� 519,6 ���. ��. ������ �� 15 ��� � 1985 �� 2000 ��� ���������� ������ ���� ����������� �� 35,1, ������������� � 12 % � ����������� ���������� �������� ������ � �������� � 16,1 % (����. 5).
					</p>
					<span class="italic_text"><center>
					������� 5 � �������� �������� �������������, ������������� � ��������������� ���� � ����� ��������������� ����
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center" rowspan="2"><span class="black">���� ����������</span></td>
									<td align="center" valign="center" colspan="3"><span class="black">����</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">������� 2000�.-1985�.</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">1985</span></td>
									<td align="center" valign="center"><span class="black">1996</span></td>
									<td align="center" valign="center"><span class="black">2000</span></td>
									<td align="center" valign="center"><span class="black">��</span></td>
									<td align="center" valign="center"><span class="black">%</span></td>
								</tr>
								
								
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������� �����</span></td>
									<td align="center" valign="center"><span class="grey">361,1</span></td>
									<td align="center" valign="center"><span class="grey">363,4</span></td>
									<td align="center" valign="center"><span class="grey">404,7</span></td>
									<td align="center" valign="center"><span class="grey">43,6</span></td>
									<td align="center" valign="center"><span class="grey">12</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������������� �����</span></td>
									<td align="center" valign="center"><span class="grey">384,7</span></td>
									<td align="center" valign="center"><span class="grey">512,9</span></td>
									<td align="center" valign="center"><span class="grey">519,6</span></td>
									<td align="center" valign="center"><span class="grey">134,9</span></td>
									<td align="center" valign="center"><span class="grey">35,1</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������� ���������� ����������� ������ � ��������</span></td>
									<td align="center" valign="center"><span class="grey">69,4</span></td>
									<td align="center" valign="center"><span class="grey">96,5</span></td>
									<td align="center" valign="center"><span class="grey">84,9</span></td>
									<td align="center" valign="center"><span class="grey">15,5</span></td>
									<td align="center" valign="center"><span class="grey">16,1</span></td>
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��������������� �����</span></td>
									<td align="center" valign="center"><span class="grey">65,1</span></td>
									<td align="center" valign="center"><span class="grey">118,2</span></td>
									<td align="center" valign="center"><span class="grey">119,3</span></td>
									<td align="center" valign="center"><span class="grey">53,6</span></td>
									<td align="center" valign="center"><span class="grey">81,6</span></td>
								</tr>
							</table>
					<p>
					� �������������� ���� ���������� ��������� ������� � ��������� ���������������� ������ ���������� ������������� ������� ��������������� ������: � 1985 �� 2000 ��� �� 82 %. ������ �� 5 ��� ���������� ����������� ������ � �������������������� ������� �������� �� 19,7 %, ������������� � 1,3 %, ����������� ���������� �������� � ������ ������ � 9,9 %.
					</p>
					<p>
					�� ����������� ��������������� �����, � ���������� ������ � 1984�. ���� �� �������� � ���� ������� ���� �������� 60, � � 2004 �. � ��� 184 �/��, �. �. ���������� � 3,6 ����. � �������� ��������� ����� ������ �� ������ �������� ���������� � ���� ��� ������� 2,9 ���� ���.
					</p>
					<p>
					������������ ������ ������������ ������ ����� (94,4 ���. ��) ���������� ���������� ���� ������������� �������, �. �. 56 % ��������� (������� 1948�1953 ��.) ��� �������� ������ ����������� ��������, ��� ������� �� ������������, 18 % ��������� � ������� ������ ����� � ������ 26 % ��������� ���� �������, ���� ����� ���������� ��������� ������� �����������.
					</p>
					<p>
					��������� � ������������ ������������ ���������� ������ � ��������� ����� ����� ������ ��������� �� ���������-����������� ���������� � ������� ���������������, ������������ ��������� ��������� ��������, ��������������� ������������ � ����������� �� ������������� ������������� � ������, ������� ������ �������������� ��� �������������� �����������. � �������� ����� ��������������� ������� ���������������, ��-������, ������ ��������� �� �������-����������� ��������, ��-������, ���� ���������������, ������������� �� ������ ������������� ������������ ���������� ��������, �� � ���� ��������� ������������� ������ ������������� �����.
					</p>
					<p>
					��� ��������� ���������� (��������, �������, ����������) �� ����� �������������� ��������� � ������� �� ��������, � ����� ������������ ����������� ���������� ������������������ �������� � �������������� ����� ����������� ������������ �������������� ������ �������������� ���������, ����������� �� ������ �� ������� ���������, �� � ������������� �������� ���������. ������������ ������� ��������� (%) �� ������������� ��������� (���� �������� ����������) ������ ���������� ������ �������������, � ����� ������ ���� �������������� ��������� ��������� ������� ���������� �� ������� ��������� ������������.
					</p>
					<span class="header2"><center>��������� ����, ��� ������������� � ��������� ��������� ��������</center></span>
					<p>
					� ���������������� �������� ��������������� ���� ����������� ������� ��������� ��������: 6616 ���. ��. ������������� ������ �� ���������� �� 01.01.2012 (����. 6) ��������������� � ������������ � ��������� ���������� ����� ���� ������ ��������������������� ����������, �� ���� ������� ���������� 92,35 %. ����� ��������� ���������� 3,69 % ���������� ����, ��������������, ���������� � ����� ���������� � 0,82 %, �������, ������� ������, ����� ������ � �������������� 1,72, 0,84 � 0,57 % (����. 20). �������������������� ������ �������� 92,61 % ������ ��������������������� ���������� ����, ��������������� ������� �������� ������������� (69,5 %), ��� �� ������ ������������ ���������� ���������� ������� �����, �� ��� ��������� ������������ �������������� ������� ������ �� ��� ������������ �������� ������, ����������� ��������������� ����������.
					</p>
					<span class="italic_text"><center>
					������� 6 � ������������� ������ ��������������� ��� �� ���������� �� 01.01.2012�.
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center" rowspan="2"><span class="black">������������ ��������� ������</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">�������, ���. ��</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">2011 �.</span></td>
									<td align="center" valign="center"><span class="black">�������� ���, %</span></td>
									
								</tr>
								
								
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ��������������������� ����������</span></td>
									<td align="center" valign="center"><span class="grey">6109,8</span></td>
									<td align="center" valign="center"><span class="grey">92,36</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ���������� �������</span></td>
									<td align="center" valign="center"><span class="grey">244</span></td>
									<td align="center" valign="center"><span class="grey">3,69</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� �������������� � ����� ����������</span></td>
									<td align="center" valign="center"><span class="grey">54,2</span></td>
									<td align="center" valign="center"><span class="grey">0,82</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ����� ���������� ���������� � ��������</span></td>
									<td align="center" valign="center"><span class="grey">0,3</span></td>
									<td align="center" valign="center"><span class="grey">0,005</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ������� �����</span></td>
									<td align="center" valign="center"><span class="grey">114,1</span></td>
									<td align="center" valign="center"><span class="grey">1,72</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ������� �����</span></td>
									<td align="center" valign="center"><span class="grey">55,6</span></td>
									<td align="center" valign="center"><span class="grey">0,84</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ������</span></td>
									<td align="center" valign="center"><span class="grey">38,0</span></td>
									<td align="center" valign="center"><span class="grey">0,57</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="grey_bold">����� ������ � ���������������� ��������</span></td>
									<td align="center" valign="center"><span class="grey_bold">6616,0</span></td>
									<td align="center" valign="center"><span class="grey_bold">100</span></td>
									
								</tr>
							</table>
					<p>
					��� �������������������� ����� ������������ �� ����������, � ��� ����� � �����. ������� �� ���� ���������� ���� ����� ���� � 14,0 ���. ��, ��� 0,23 % �� ������� ������ ��������������������� ���������� (����. 7). �� ������ ���������� ���������� �� ��������������� ���� �� 1 ������ 2012 ����, � ������� ������ ��������������������� ���������� 70,17 % ��������� � ������� ������������� ������� (63,87 %) � ����������� ��� (6,30 %), ��������� 29,83 % � � ��������������� �������������.
					</p>
					<span class="italic_text"><center>
					������� 7 � ������ � ��������� ��������� ������ ������ ��������������������� ����������
					</center></span>
					<table width="100%" cellpadding="1" cellspacing="0" class="table_border1">
								
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center" rowspan="2"><span class="black">������ ������</span></td>
									<td align="center" valign="center" colspan="2"><span class="black">2011�.</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#f6f6f5"><!-- ������ -->
									<td align="center" valign="center"><span class="black">�������, ���. ��</span></td>
									<td align="center" valign="center"><span class="black">�������� ���, %</span></td>
									
								</tr>
								
								
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">����� ��������������������� ����������</span></td>
									<td align="center" valign="center"><span class="grey">6109,8</span></td>
									<td align="center" valign="center"><span class="grey">100</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">�������������������� ������</span></td>
									<td align="center" valign="center"><span class="grey">5658</span></td>
									<td align="center" valign="center"><span class="grey">92,61</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">� ��� �����: �����</span></td>
									<td align="center" valign="center"><span class="grey">3930,5</span></td>
									<td align="center" valign="center"><span class="grey">64,33</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">������</span></td>
									<td align="center" valign="center"><span class="grey">14,0</span></td>
									<td align="center" valign="center"><span class="grey">0,23</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��. ����������</span></td>
									<td align="center" valign="center"><span class="grey">26,7</span></td>
									<td align="center" valign="center"><span class="grey">0,44</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��������</span></td>
									<td align="center" valign="center"><span class="grey">102,3</span></td>
									<td align="center" valign="center"><span class="grey">1,67</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">��������</span></td>
									<td align="center" valign="center"><span class="grey">1584,5</span></td>
									<td align="center" valign="center"><span class="grey">25,94</span></td>
									
								</tr>
								<tr valign="center" bgcolor="#FFFFFF"><!-- ������ -->
									<td align="center" valign="center"><span class="grey">���������������������� ������</span></td>
									<td align="center" valign="center"><span class="grey">451,8</span></td>
									<td align="center" valign="center"><span class="grey">7,39</span></td>
									
								</tr>
							</table>
					<p>
					��������������� �������������������� ��������� ������������ 6097 ���. ��, � ��� ����� �������������, ������������� 4406 ���. ��, ���������� � 1691 ���. ��, � ��� ����� ��������� � 849,9 ���. ��. ����� ���� ������, �� ������� ������������ �������������������� ��������� �������������, �������������, ����������� � ����������, ���������� ����� ������������� ��������� �����: 2544 ���. ��, ��� 57,7 %. ����� �������� �������� 1231,7 ���. �� (28 %) ���������� �����, ����������� � ��������������� �������������. � ������� ������������ 25,0 % ������ ������������ �� ����� ������ ��� �����������.
					</p>
					<p>
					����� ������� ������ ���������� �������� ���������� 849,9 ���. ��, ��� 13,9 % ���� ������, �� ��� 37,5 % � �� ����� �������������, � 61,5 % � ������ � �����������. �������� ����� ���� ��������� � ���� �����: 46,6 % � ���������-, � 87,2 % � ����������� ������. ������� ������� ���������� ������ � ����������� ������� � ������ �������������������� �������� ��������������� ��������, �� �������������� ���������� � ��������� ���������� ������.
					</p>
					
					<p>
					��������� ����� ��������������� ���� ��������������� �������������������� ����������. �� ��������� � 1990 ����� (404430 ��) � 2012 ���� ������� ��������� ������ ����������� �� ����� (31,7 %) � ���������� 276373 ��. ���������� � �� ������������� ��������� � ���������� ���������� ��������� � �����������, �������������, ����������, ������������� �� ������� 34,5 ���. ��, ��� 12,5 % ������� ��������.
					</p>
					
					<p>
					���������� ����������� ��������� ������������� ������: ���������� ����� ������������������ ��������� ���������� 70�75 %. ���������� ������������� �������������� ��������� (� ��������� 15 ��� �� ������ ���������������� ���������� ����������� ���� 10�15 % ������� �� ������������ ������) ������������ ������ �� ��� ������������. ������� ������������ ����, ��������� ������������� � �������, ���������� � ���� 87,6 ���. ��, ��� 31,7 %.
					</p>
					<p>
					� ��������� ������ ���� 27,6 % �������� ������������ �������� ������, � ��� ����� 1584,5 ���. �� �������� � 102,3 ���. �� ��������. ��������� ��� �� ���������� ���� ������������ (���. 16), ������� ��������� ��� �������� ��������� �����, � ����� ��������������� �����, ����������� ���������� ��������� (46,5 %) � ������������� (27,4 %), ���������� ������ (23,0 %) � �������� ������� (15,4 %). �� ������ �������������� ������������ ��������� ��������� ����� ���������� ������ ����� �� 53 % �� �����������. ��������, ��� ��������� ������ ������������ ������������� ������������ ���� �������������� ����, ����� ����� ������ �� ��������� �� ���������.
					</p>
					<p>
					� ������� ��� �� ���������� �������������������� ������ ������������ ����� ��������� ������������ �����������, ������� �������� ��������, ����������� ���������� ������ � ���������� �� ��������������. �������� ���������� �������� ������ ���� ���������� 2,4 %. ������ ������� ������������ ������ ���������� � ������ ����� �����������. � ������� ��������� ��������� ������ 29,7 % ������ ����������, ��������� ��������� � ������������, ������������� � ������ �����. �������������� ����������� ������ �����, ������������� ������� ���������������� �� ����� �� ����, ����������� ��������� � ������� ����� �� �����, ������� ��� ��������, ������ ������������ ������ ���������� �������� � ������� ��������������������� ������ �����������������. ������� ����������� ������ ���������� ��������� ������������ � ������ ���� ������������� �������.
					</p>
					<p>
					��������� ��������� ��������-���������� ���������� ������� � ������������ ��������� ��������� � ������� ����������� �������� ��������������. ���, �� ���������� ������� �� ������ �������� ����������-��������� ������������� ���������������� � ������������ ��������� ���� ������������� � �������������� ��������� ������.
					</p>
					<p>
					�������� ��������� ������������ ��� ������������ ���������� ������� ������������� ��������� �������� �������� ���������:
					</p>
					<ul>
						<li>-�������������� ����������-��������, ��������������� ���� �, � ���������, ����������� ������� �Ի, � ������� ����������� ������ ����� � ���������� ������������� �������������������� ������ ���������������� � ������������. �� �������� �� ���������� � ��������� ���������� ���� ����� ��� ����������� ���������� ������ ��������������������� �����������;</li>
						<li>-��������� ��������� �������� � ������� ���������� ������� �� ������ �� ������ ������� ������������, �� ����������� �������� �� ���� ���� ����� �� ��������;</li>
						<li>-���������� ������ ��������������� ������� ���������� ���������� ���������: ������� ��� ��������� � ������� �� ����� 8 �����������;</li>
						<li>-������ ������� ���������� ���������, ������� ����� ���������������, ��� ����� � ������� ���������� ��������� ������������� ������������� �����;</li>
						<li>-�������� ��������� ��������������� ����� ��������� ���� ��������� �� ��������� ���������� ��� ����������������������������, ��� � ���������������� �����������, ������� ����� �� ����������� ���� ����� � ������������� ����������.</li>
				
					</ul>
									
					
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">
					<span class="italic_text"><center>
					��� ������������� ������� ���������, ����������� ������:
					������� ���������� ������ ��������� ��������������� ���� : ���������� / �.�.��������, �.�.��������, �.�.��������� � ��. - ����������: ����� ��������������� ���. ��������� ��-��, 2013. - 520�.
					</center></span>
					</td>
				</tr>
				</table>
				
</td>
            <!-- ��������� ��������� ���������� �������� -->
            <td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
    	</tr>
        <tr>
			<!-- ����� ������ -->
            <td colspan="2" align="center" bgcolor="white" width="698" valign="bottom">
				<img src="pics/divline.jpg" width="450" height="5" border="0" alt="">
				<br>

                <span class="copyright">Copyright 2015 &copy; ����������� ���-���������� ������</span>
            </td>
			<td width="2" style="background: url(pics/right_bg.jpg) repeat-y top left;"></td>
		</tr>
	</table>
	<!-- ������� ���� �������� -->

</body>

</html>
	