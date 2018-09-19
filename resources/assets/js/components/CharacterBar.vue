<template>
    <div class="w-full h-12 flex flex-row items-center" style="background: rgb(0,0,0); background: rgba(0,0,0, 0.75)">
        <button class="btn w-auto btn-blue h-full mt-2 mx-2 ml-6" @click.prevent="showCharacterSelection">+</button>
        <dnd-modal name="character-selector">
            <div class="text-grey-light">
                <ul class="list-reset">
                    <li v-for="(character, key) in availableCharacters">
                        <a href="#" class="no-underline text-grey-light" @click.prevent="activateCharacter(character, key)">
                            {{ character.name }} (Level {{ character.level }} {{ character.class }})
                        </a>
                    </li>
                </ul>
                Or
                <character-creator @characterCreated="addToAvailableCharacters($event)"></character-creator>
            </div>
        </dnd-modal>
        <ul class="list-reset flex">
            <li v-for="character in all_characters" class="flex items-center mr-2">
                <a href="#" class="no-underline text-grey-light" @click.prevent="showCharacterPane(character)">
                    {{ character.name }}
                </a>
                <button class="btn btn-red w-auto mt-2 ml-2">x</button>
            </li>
        </ul>
    </div>
</template>
<script>
    import CharacterCreator from './CharacterCreator';
    import CharacterEditor from './CharacterEditor';
    export default{
        components:{
            CharacterCreator,
            CharacterEditor
        },
        props: [
            'channel',
            'myCharacters'
        ],
        data(){
            return{
                all_characters: [],
                availableCharacters: [],
                activeCharacter: {}
            }
        },
        methods:{
            addToAvailableCharacters(event){
                this.availableCharacters.push(event);
            },
            activateCharacter(character, key){
                this.activeCharacter = character;
                axios.post('/game/' + this.channel.id + '/characters/' + character.id)
                    .then(response =>{
                        this.availableCharacters.splice(key, 1);
                    }).catch(error => {
                    })
                this.$modal.hide('character-selector');
            },
            showCharacterSelection(){
                this.$modal.show('character-selector');
            },
            showCharacterPane(character){
                Event.$emit('show-character', character);
            }
        },
        mounted(){
            this.availableCharacters = this.myCharacters;
            Echo.private('game.' + this.channel.id + '.character-activated')
                .listen('CharacterActivated', (e) => {
                    this.all_characters.push(e.character);
                });
        }
    }
</script>
