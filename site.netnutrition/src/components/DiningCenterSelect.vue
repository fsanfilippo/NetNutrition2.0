<template>
    <div>
        <div class="form-group">
            <label class="">Dining Center: </label>
            <select v-model="selectedCenter" @change="centerSelected" class="form-control" >
                <option v-for="center in diningCenters">{{center.name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label class="">Meal: </label>
            <select v-model="selectedMeal" class="form-control" >
                <option v-for="meal in diningCenterMeals">{{meal}}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                selectedCenter: "",
                selectedMeal:"",
            }
        },
        computed:{
            diningCenters() {
                 return this.$store.state.diningCenterData.diningCenters
            },

            diningCenterMeals(){
                this.selectedCenter = this.$store.state.selectedDiningCenter
                let diningCenter = this.$store.state.diningCenterData.diningCenterMenus[this.selectedCenter] 
                let meals = []
                for (let meal in diningCenter){
                    meals.push(meal)
                }
                if (!this.selectedMeal){
                    this.selectedMeal = meals[0] 
                }
                this.mealSelected()
                return meals
            }
        },
        methods:{
            centerSelected(){
                if(this.selectedCenter != undefined){
                    this.selectedMeal = undefined
                    this.$router.push('/dining-center/'+ this.selectedCenter);
                    this.$store.commit('setSelectedDiningCenter', this.selectedCenter)
                }
                 
            },

            mealSelected(){
                this.$store.commit('setSelectedMeal', this.selectedMeal)
            }
        },
        mounted() {
           
        }
    }
</script>
<style>
    .dropdownLabel{
        float:left;
        margin-right:1em;
        font-size:16px;
        padding-top:6px;
        padding-bottom:6px;
    }
    .dropdown{
        width:60%; 
    }
</style>
