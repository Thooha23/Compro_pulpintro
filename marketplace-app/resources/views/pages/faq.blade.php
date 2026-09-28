@extends('layouts.app')

@section('title', 'FAQ - Lions Club Jakarta Pulpintro')

@section('content')
    <section class="faq-section py-5 position-relative overflow-hidden">
        <div class="faq-shape faq-shape-left"></div>
        <div class="faq-shape faq-shape-right"></div>

        <div class="container" style="max-width: 960px;">
            <div class="text-center mb-3">
                <h1 class="faq-title"><span>Frequently Asked</span> <span class="faq-title-highlight">Questions</span></h1>
                <p class="faq-subtitle">These are the most commonly asked questions about our programs and fundraising.</p>
            </div>

            <div class="faq-tabs d-flex justify-content-center gap-3 mb-4">
                <button type="button" class="faq-tab active" data-tab="general">General</button>
                <button type="button" class="faq-tab" data-tab="fundraising">Fundraising</button>
            </div>

            <div class="faq-panel active" id="faq-general">
                <div class="faq-list">
                    @foreach($generalFaqs as $index => $faq)
                        <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                            <button class="faq-question" type="button">
                                <span class="faq-icon"><i class="bi bi-question-circle"></i></span>
                                <span>{{ $faq['question'] }}</span>
                                <span class="faq-caret"><i class="bi bi-chevron-up"></i></span>
                            </button>
                            <div class="faq-answer" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="faq-panel" id="faq-fundraising" style="display:none;">
                <div class="faq-list">
                    @foreach($fundraisingFaqs as $index => $faq)
                        <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                            <button class="faq-question" type="button">
                                <span class="faq-icon"><i class="bi bi-question-circle"></i></span>
                                <span>{{ $faq['question'] }}</span>
                                <span class="faq-caret"><i class="bi bi-chevron-up"></i></span>
                            </button>
                            <div class="faq-answer" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.faq-tab');
            const panels = document.querySelectorAll('.faq-panel');

            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    const selected = this.dataset.tab;

                    tabs.forEach(item => item.classList.toggle('active', item === tab));
                    panels.forEach(panel => {
                        const show = panel.id === 'faq-' + selected;
                        panel.style.display = show ? 'block' : 'none';
                        panel.classList.toggle('active', show);
                    });
                });
            });

            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const btn = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');

                btn.addEventListener('click', function () {
                    const isOpen = item.classList.contains('active');

                    faqItems.forEach(other => {
                        other.classList.remove('active');
                        const otherAnswer = other.querySelector('.faq-answer');
                        otherAnswer.style.display = 'none';
                        other.querySelector('.faq-caret').innerHTML = '<i class="bi bi-chevron-down"></i>';
                    });

                    if (!isOpen) {
                        item.classList.add('active');
                        answer.style.display = 'block';
                        btn.querySelector('.faq-caret').innerHTML = '<i class="bi bi-chevron-up"></i>';
                    }
                });
            });
        });
    </script>
@endsection
