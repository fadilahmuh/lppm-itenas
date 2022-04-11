@extends('layouts.admin')

@section('title')
   Detail Surat
@endsection

@section('container')
<!-- Main page content-->

                                    <div class="col-lg-17">
                                        <div class="card mb-4">
                                        <div class="card-body">
                                                <div class="mb-3 row">
                                                    <table class="table">
                                                        <tbody>
                                                            <table>
                                                                <tr>
                                                                    <td><img src="C:\xampp\htdocs\surat-app-lpp.itenas.png" width="105" height="90"></td>
                                                                    <td>
                                                                    <center>
                                                                        <font size="4">YAYASAN PENDIDIKAN DAYANG SUMBI</font><br>
                                                                        <font size="5"><b>INSTITUT TEKNOLOGI NASIONAL</b></font><br>
                                                                        <font size="4"> LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT </th></b></font><br>
                                                                        <font size="3"> Jl. PHH Mustapa 23, Bandung 40124 Indonesia, Telepon: +62-22-7272215 ext 157, Fax:022-720 2892 </th></b></font>
                                                                    </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"><hr></td>
                                                                </tr>
                                                                <td>
                                                                <td>
                                                                <table width="200" align="right">
                                                                    <tr>
                                                                        <td class="text2"> </td>
                                                                        <td>Bandung, {{ $item->letter_date }}</td>
                                                                    </tr>
                                                                </table>
                                                                </table>
                                                            <table width="1000">
                                                                <tr class="text2">
                                                                    <td>Nomor : {{ $item->letter_no }}</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Perihal : {{ $item->regarding }}</td>
                                                                    <td width="564">: -</td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <table width="625">
                                                                <tr>
                                                                <td>
                                                                    <font size="2">Kepada Yth : {{ $item->sender->name }}<br><br></font>
                                                                </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <table width="625">
                                                                <tr>
                                                                <td>
                                                                    <font size="2">Senat Institut Teknologi Nasional<br>di Tempat <b></b></font>
                                                                </td>
                                                                </tr>
                                                            </table>
                                                            <table width="625">
                                                                <tr>
                                                                <td>
                                                                    <font size="2"> <br>  <b></b></font>
                                                                </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            </table>
                                                            <table width="625">
                                                                <tr>
                                                                    <td>
                                                                        <font size="2">Ketua Komisi III Itenas mengundang Bapak dan Ibu untuk menghadiri agenda rapat yang akan <br>dilaksanakan pada: <b></b></font>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table>
                                                                <tr class="text2">
                                                                    <td><b>Hari</b></td>
                                                                    <td width="541">: <b>Selasa</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Tanggal</b></td>
                                                                    <td width="525">: <b>16 mei 2022</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Waktu</b></td>
                                                                    <td width="525">: <b>14-00 - 16.00</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Tempat</b></td>
                                                                    <td width="525">: <b>15220 - Ruang Rapat Pimpinan</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Agenda</b></td>
                                                                    <td width="525">: <b>Web Bahasa Inggriss</b></td>
                                                                </tr>
                                                            <br>
                                                            <table width="625">
                                                                <tr>
                                                                <td>
                                                                    <font size="2"> <br> <b></b></font>
                                                                </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            </table>
                                                            <table width="625">
                                                            <tr>
                                                            <td>
                                                            <font size="2">Diharapkan atas kehadiranya, Demikian surat ini di sampaikan, atas perhatian dan kerjasamanya kami
                                                            ucapkan terima kasih.<br><br>Wassalamu'alaikum wr.wb.
                                                            </font>
                                                            </td>
                                                            </tr>
                                                            </table>
                                                            <br>
                                                                <table width="625">
                                                                <tr>
                                                                    <td width="430"><br><br><br><br></td>
                                                                    <td class="text" align="center">Ketua Komisi II<br><br><br><br>Dyah Setyo Pertiwi., Ph.d.</td>
                                                                    </tr>
                                                                    </table>
                                                                    </center>
                                                        </tbody>
                                                            </table>
                                                        </tbody>
                                                    </table>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        window.print();
        window.onafterprint = window.close;
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
@endsection

