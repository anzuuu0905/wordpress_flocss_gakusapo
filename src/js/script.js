// Strictモードの有効化
"use strict";

// サンプルコード
// DOMの読み込み完了を待つ
document.addEventListener("DOMContentLoaded", function () {
  // 変数、関数、イベントリスナーの初期化
  // 変数
  const button = document.querySelector(".c-btn");

  // 関数
  function handleClick() {
    console.log("Button clicked");
  }

  // イベントリスナー
  if (button) {
    button.addEventListener("click", handleClick);
  }

});
