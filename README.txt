���������� ������� ��������� � ����� ����� index.php
***
������ ��� ������
A) 1 Warning -> 2 Warning
B) 2 Warning -> 1 Error
C) 2 Error ->  ����������
����� ������ 4 ������, �� ��� �� ����� ������������� ������:
1 Error -> 1 Error
������ ���:
1.������� �������� ������� ��� �������� $errorN � $warningM. ���� $warningM ����� 0 � $errorN ��������, �� ������ ���������� �� �������������� � ������, �� ���� �� ����� ������� -1. 
2. ���� ������� �� �����������, �������� �� 2 $cnt.
3. ���������� � $copy ���������� $errorN, ����� ������������� $errorN ��� �������� ��������.
4. ���������, ���� ���-�� �������������� �������, �� ��������� 1 � ���-�� ��������������, � ����������� ���-�� ����� �� 1.
5. ����� ���������  ���� do while. ������ ���� ���� $errorN �� ������.
6. � ���������� $cnt ��������� ��� ����.
7. ���������� � $tmp ����������� ��� �.
8. ��������� � $errorN ���������� ��������������� ������ � ��������������.
9. ����������� ���������� �������������� �� 2.
10. ����� ����� � $cnt ���������� ����� ��� �������������� ��������������, � ����� � ������.