@extends('layouts.app')

@section('title')
<title>Fashionably確認画面</title>
@endsection

@section('content')
<div class="confirm-field">
    <div class="confirm-title">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="confirm__table">
            <table>
                <tr>
                    <th>お名前</th>
                    <td>
                        <p>{{$contact['last_name'] . '  ' .$contact['first_name']}}</p>
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        @switch($contact['gender'])
                        @case (1)
                        <p>男性</p>
                        <input type="hidden" name="gender" value="1" readonly/>
                        @break
                        @case (2)
                        <p>女性</p>
                        <input type="hidden" name="gender" value="2" readonly/>
                        @break
                        @case (3)
                        <p>その他</p>
                        <input type="hidden" name="gender" value="3" readonly/>
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <p>{{ $contact['email'] }}</p>
                        <input type="hidden" name="email" value="{{ $contact['email'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        <p>{{ $contact['top_tell'] . $contact['center_tell'] . $contact['back_tell'] }}</p>
                        <input type="hidden" name="tell" value="{{ $contact['top_tell'] . $contact['center_tell'] . $contact['back_tell'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>
                        <p>{{ $contact['address'] }}</p>
                        <input type="hidden" name="address" value="{{ $contact['address'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>
                        <p>{{ $contact['building'] }}</p>
                        <input type="hidden" name="building" value="{{ $contact['building'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        @switch($contact['category_id'])
                        @case (1)
                        <p>商品のお届けについて</p>
                        <input type="hidden" name="category_id" value="1" readonly/>
                        <input type="hidden" name="content" value="商品のお届けについて"/>
                        @break
                        @case (2)
                        <p>商品の交換について</p>
                        <input type="hidden" name="category_id" value="2" readonly/>
                        <input type="hidden" name="content" value="商品の交換について"/>
                        @break
                        @case (3)
                        <p>商品トラブル</p>
                        <input type="hidden" name="category_id" value="3" readonly/>
                        <input type="hidden" name="content" value="商品トラブル"/>
                        @break
                        @case (4)
                        <p>ショップへのお問い合わせ</p>
                        <input type="hidden" name="category_id" value="4" readonly/>
                        <input type="hidden" name="content" value="ショップへのお問い合わせ"/>
                        @break
                        @case (5)
                        <p>その他</p>
                        <input type="hidden" name="category_id" value="5" readonly/>
                        <input type="hidden" name="content" value="その他"/>
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <p>{{ $contact['detail'] }}</p>
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}" readonly/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
    
</div>
@endsection