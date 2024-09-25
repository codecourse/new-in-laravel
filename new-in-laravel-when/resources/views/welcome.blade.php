<div>
    <input @disabled(false) />

    <div {{ when(false, 'contenteditable') }}>
        Hey
    </div>
</div>
