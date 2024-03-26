@extends('layouts.app')

@section('title')
<title>Fashionablyお問い合わせフォーム</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact-form">
    <div class="contact-title">
        <h2 class="contact-text">Contact</h2>
    </div>
    <form class="form" action="/index" method="post">
        @csrf
        <div class="form__group">
            <div class="form__title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="last_name" placeholder="例:山田" />
                    <input type="text" name="first_name" placeholder="例:太郎" />
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--gender">
                    <input type="radio" name="gender" value="1" />
                    <div class="form__label--gender">
                        <label>男性</label>
                    </div>
                </div>
                <div class="form__input-gender">
                    <input type="radio" name="gender"  value="2" />
                    <div class="form__label--gender">
                        <label>女性</label>
                    </div>
                </div>
                <div class="form__input-gender">
                    <input type="radio" name="gender" value="3" />
                    <div class="form__label--gender">
                        <label>その他</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">メールアドレス</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" />
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">電話番号</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="number" name="top_tell" placeholder="例:080" />
                    <span>-</span>
                    <input type="number" name="center_tell" placeholder="例:1234" />
                    <span>-</span>
                    <input type="number" name="back_tell" placeholder="例:5678" />
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">住所</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">建物名</label>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">お問い合わせの種類</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select name="category_id">
                        <option value="">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <label class="form__label--item">お問い合わせ内容</label>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <textarea type="text" cols="30" rows="4" name="detail" placeholder="例:お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                    <!-- バリデーション機能 -->
                </div>
            </div>
        </div>
        <div class="form__submit">
            <input type="submit" value="確認画面" />
        </div>
        <!-- ここに修正ボタン実装予定 -->
    </form>
</div>
@endsection