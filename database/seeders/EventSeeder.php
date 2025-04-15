<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Концерт рок-группы "Гармония"',
                'description' => 'Не пропустите грандиозный концерт популярной рок-группы!',
                'start_date' => '2025-04-15',
                'end_date' => '2025-04-22',
                'url' => 'https://example.com/rock-concert',
                'category_id' => 1
            ],
            [
                'title' => 'Выставка современного искусства',
                'description' => 'Выставка новых работ талантливых художников.',
                'start_date' => '2025-04-17',
                'end_date' => '2025-04-24',
                'url' => 'https://example.com/art-exhibition',
                'category_id' => 2
            ],
            [
                'title' => 'Мастер-класс по фотографии',
                'description' => 'Научитесь делать невероятные фотографии на нашем мастер-классе.',
                'start_date' => '2025-04-16',
                'end_date' => '2025-04-23',
                'url' => 'https://example.com/photography-workshop',
                'category_id' => 3
            ],
            [
                'title' => 'Театральная премьера "Мечты"',
                'description' => 'Новая постановка о жизни и стремлениях человека.',
                'start_date' => '2025-04-18',
                'end_date' => '2025-04-25',
                'url' => 'https://example.com/theater-premiere',
                'category_id' => 4
            ],
            [
                'title' => 'Кулинарный мастер-класс для детей',
                'description' => 'Детям предстоит научиться готовить вкусные блюда.',
                'start_date' => '2025-04-19',
                'end_date' => '2025-04-26',
                'url' => 'https://example.com/kids-cooking-class',
                'category_id' => 5
            ],
            [
                'title' => 'Фестиваль уличной еды',
                'description' => 'Приходите на вкуснейший фестиваль уличной еды.',
                'start_date' => '2025-04-20',
                'end_date' => '2025-04-27',
                'url' => 'https://example.com/street-food-festival',
                'category_id' => 6
            ],
            [
                'title' => 'Кинофестиваль "Лучшие фильмы года"',
                'description' => 'Смотрите лучшие фильмы 2024 года на кинофестивале.',
                'start_date' => '2025-04-22',
                'end_date' => '2025-04-29',
                'url' => 'https://example.com/film-festival',
                'category_id' => 7
            ],
            [
                'title' => 'Тренинг по личностному росту',
                'description' => 'Станьте лучшей версией себя на тренинге по личностному росту.',
                'start_date' => '2025-04-23',
                'end_date' => '2025-04-30',
                'url' => 'https://example.com/self-development-workshop',
                'category_id' => 8
            ],
            [
                'title' => 'Йога-ретрит в горах',
                'description' => 'Отдыхайте и медитируйте в горах на йога-ретрите.',
                'start_date' => '2025-04-24',
                'end_date' => '2025-05-01',
                'url' => 'https://example.com/yoga-retreat',
                'category_id' => 9
            ],
            [
                'title' => 'Международная конференция по технологиям',
                'description' => 'Обсуждение новых технологий и их будущего на конференции.',
                'start_date' => '2025-04-25',
                'end_date' => '2025-05-02',
                'url' => 'https://example.com/tech-conference',
                'category_id' => 10
            ],
            [
                'title' => 'Футбольный матч: Лига чемпионов',
                'description' => 'Не пропустите важнейший матч Лиги чемпионов.',
                'start_date' => '2025-04-26',
                'end_date' => '2025-05-03',
                'url' => 'https://example.com/champions-league-match',
                'category_id' => 1
            ],
            [
                'title' => 'Книжный фестиваль',
                'description' => 'Множество книг и встречи с авторами на книжном фестивале.',
                'start_date' => '2025-04-27',
                'end_date' => '2025-05-04',
                'url' => 'https://example.com/book-festival',
                'category_id' => 2
            ],
            [
                'title' => 'Фестиваль электронной музыки',
                'description' => 'Самые яркие звезды электронной музыки на фестивале.',
                'start_date' => '2025-04-28',
                'end_date' => '2025-05-05',
                'url' => 'https://example.com/electronic-music-festival',
                'category_id' => 3
            ],
            [
                'title' => 'Марафон бегунов',
                'description' => 'Присоединяйтесь к марафону и побеждайте!',
                'start_date' => '2025-04-29',
                'end_date' => '2025-05-06',
                'url' => 'https://example.com/marathon-run',
                'category_id' => 4
            ],
            [
                'title' => 'Тренинг по эффективным продажам',
                'description' => 'Поднимите продажи с помощью нашего тренинга.',
                'start_date' => '2025-04-30',
                'end_date' => '2025-05-07',
                'url' => 'https://example.com/sales-training',
                'category_id' => 5
            ],
            [
                'title' => 'Фестиваль стартапов',
                'description' => 'Инновационные стартапы со всего мира на фестивале.',
                'start_date' => '2025-05-01',
                'end_date' => '2025-05-08',
                'url' => 'https://example.com/startup-festival',
                'category_id' => 6
            ],
            [
                'title' => 'Ретрит по медитации и осознанности',
                'description' => 'Обогащение души на ретрите по медитации и осознанности.',
                'start_date' => '2025-05-02',
                'end_date' => '2025-05-09',
                'url' => 'https://example.com/meditation-retreat',
                'category_id' => 7
            ],
            [
                'title' => 'Шоу-программа "Волшебные иллюзии"',
                'description' => 'Магия и чудеса на нашем шоу!',
                'start_date' => '2025-05-03',
                'end_date' => '2025-05-10',
                'url' => 'https://example.com/magic-show',
                'category_id' => 8
            ],
            [
                'title' => 'Семинар по развитию лидерства',
                'description' => 'Развивайте лидерские качества на нашем семинаре.',
                'start_date' => '2025-05-04',
                'end_date' => '2025-05-11',
                'url' => 'https://example.com/leadership-seminar',
                'category_id' => 9
            ],
            [
                'title' => 'Киноночь на открытом воздухе',
                'description' => 'Просмотр классики кино под открытым небом.',
                'start_date' => '2025-05-05',
                'end_date' => '2025-05-12',
                'url' => 'https://example.com/open-air-cinema',
                'category_id' => 10
            ],
            [
                'title' => 'Конференция по здоровому питанию',
                'description' => 'Лучшие эксперты в области здорового питания на конференции.',
                'start_date' => '2025-05-06',
                'end_date' => '2025-05-13',
                'url' => 'https://example.com/healthy-eating-conference',
                'category_id' => 1
            ],
            [
                'title' => 'Городской фестиваль уличного искусства',
                'description' => 'Яркие уличные выступления и современное искусство.',
                'start_date' => '2025-05-07',
                'end_date' => '2025-05-14',
                'url' => 'https://example.com/street'

            ],
            ];
            foreach($events as $event) {
                Event::firstOrCreate($event);
            }
    }
}
