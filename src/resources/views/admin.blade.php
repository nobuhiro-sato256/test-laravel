@extends('layouts.app')

@section('title')
<title>Fashionably検索</title>
@endsection

@section('content')
<div class="admin">
    <div class="admin-title">
        <h2>Admin</h2>
    </div>
    <form class="form">
        @csrf
        <div class="admin_form">
            <div class="admin_input">
                <input type="text" name="search"placeholder="名前やメールアドレスを入力してください" />
            </div>
            <div class="admin_gender">
                <select name="gender">
                    <option>性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="admin_type">
                <select name="category_id">
                    <option>お問い合わせの種類</option>
                    <option value="1">商品のお届けについて</option>
                    <option value="2">商品の交換について</option>
                    <option value="3">商品トラブル</option>
                    <option value="4">ショップへのお問い合わせ</option>
                    <option value="5">その他</option>
                </select>
            </div>
            <div class="admin_date">
                <input type="date" />
            </div>
            <div class="admin_submit">
                <input type="submit" value="検索">
            </div>
            <div class="admin_reset">
                <input type="submit" value="リセット">
            </div>
        </div>
    </form>
    <div class="admin_list">
        <input type="submit" value="エクスポート">
        <div class="admin_list--number">
            <a href=""><</a>
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
            <a href="">></a>
        </div>
        <div class="admin_table">
            <table>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th> </th>
                </tr>
                <!-- ここに繰り返し条件を記述予定 -->
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <!-- ここまで -->
            </table>
        </div>
    </div>
</div>
@endsection