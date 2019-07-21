<template>
    <div id="order-detail-part">
        <div class="order-detail-wrapper">
            <div class="detail-container">
                <div class="commodity-list"
                     v-for="detail in order.details"
                     v-link="{name:'commodity',params:{'hashid':detail.commodity_id}}">
                    <img :src="detail.commodity_img" alt="{{detail.commodity_name}}"/>
                    <div class="commodity-name">
                        <p>{{detail.commodity_name}}</p>
                        <ul>
                            <li class="price">&yen;{{detail.commodity_current_price | transformPrice}}</li>
                            <li class="number">{{detail.buy_number}}件</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-detail-wrapper">
            <div class="detail-container underline">
                <div class="order-result">
                    <ul>
                        <li class="result-name">
                            <p>商品总额</p>
                            <p>运费</p>
                        </li>
                        <li class="result-value">
                            <p class="price">&yen;{{order.commodity_amount | transformPrice}}</p>
                            <p class="price">&#43;&yen;{{order.freight_amount | transformPrice}}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="detail-container">
                <p class="result-amount">实付金额：<span class="price">&yen;{{order.order_amount | transformPrice}}</span></p>
            </div>
        </div>
    </div>
    <form id="suggest-form" @submit.prevent="submitProductReturn()">
        <div class="order-detail-wrapper">
            <mt-cell title="退货原因：" class="mint-field">
                <select name="sel" id="sel" @change="look" v-model="selectList">
                    <option v-for="texts in list" :value.sync="texts.value" ref="newText">{{texts.text}}</option>
                </select>
            </mt-cell>
            <title>退货原因描述</title>
            <mt-field
                    placeholder="请描述您退货原因的描述，我们将尽快处理，感谢您的反馈。"
                    slot="suggestion"
                    type="textarea"
                    rows="6"
                    :value.sync="productReturn.content">
            </mt-field>
        </div>
        <div class="order-detail-wrapper">
            <div class="uc-address-part">
                <mt-field label="快递公司：" placeholder="请填写货物退回时的快递公司" :value.sync="productReturn.ship_name"></mt-field>
            </div>
            <div class="uc-address-part">
                <mt-field label="快递单号：" placeholder="请填写货物退回时的快递单号" :value.sync="productReturn.ship_number"></mt-field>
            </div>
        </div>
        <div class="form-wrapper">
            <mt-button :disabled="form_disabled" type="primary" size="large">提交</mt-button>
        </div>
    </form>
</template>

s
<script>
    import { Field } from 'mint-ui';
    import { Cell } from 'mint-ui';
    import { Indicator } from 'mint-ui';
    import { Switch } from 'mint-ui';
    import { Toast } from 'mint-ui';
    export default {
        data(){
            return{
                order:{},
                suggestion:'',
                form_disabled:true,
                selectList : {},
                list : [
                    {value : 10 ,text : "拍错了/不想要了"},
                    {value : 20 ,text : "商品无法使用"},
                    {value : 30 ,text : "与卖家描述不符"},
                    {value : 40 ,text : "卖家发货问题"},
                    {value : 50 ,text : "物流问题"},
                    {value : 60 ,text : "未按约定时间发货"},
                    {value : 70 ,text : "其他"},
                ]
            }
        },
        components:{
            Field, Indicator, Toast
        },
        watch:{
            'suggestion':{
                handler:function(val){
                    val !== '' ? this.$set('form_disabled', false)
                        : this.$set('form_disabled', true);
                }
            }
        },
        created() {
            this.fetchDetails();
        },
        methods: {
            fetchDetails: function () {
                let vm = this;
                let itemId = this.$route.params.hashid;
                Indicator.open();
                vm.$http.get('/api/orderdetail/' + itemId).then(response => {
                    Indicator.close();
                    if (response.data.code == -1) {
                        Toast({
                            message: response.data.message
                        });
                    }
                    if (response.data.code == 0) {
                        vm.$set('order', response.data.message);
                    }
                });
            },

            look(){
                let vm = this ;
                console.log(vm.$refs.newText[vm.selectList].text)
            },

            submitProductReturn:function () {

            }
        }
    }
</script>