/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.integration.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

/**
 * GetOrderResponse
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class GetOrderResponse {
  @SerializedName("account_id")
  private String accountId = null;

  @SerializedName("account_no")
  private String accountNo = null;

  @SerializedName("amount_cash")
  private Integer amountCash = null;

  @SerializedName("average_price")
  private Double averagePrice = null;

  @SerializedName("created")
  private String created = null;

  @SerializedName("created_by")
  private String createdBy = null;

  @SerializedName("cumulative_quantity")
  private Double cumulativeQuantity = null;

  @SerializedName("fees")
  private Double fees = null;

  @SerializedName("id")
  private String id = null;

  @SerializedName("order_expires")
  private String orderExpires = null;

  @SerializedName("order_no")
  private String orderNo = null;

  @SerializedName("quantity")
  private Double quantity = null;

  @SerializedName("side")
  private String side = null;

  @SerializedName("status")
  private String status = null;

  @SerializedName("status_message")
  private StatusMessage statusMessage = null;

  @SerializedName("symbol")
  private String symbol = null;

  @SerializedName("total_order_amount")
  private Integer totalOrderAmount = null;

  @SerializedName("type")
  private String type = null;

  @SerializedName("user_id")
  private String userId = null;

  public GetOrderResponse accountId(String accountId) {
    this.accountId = accountId;
    return this;
  }

   /**
   * Get accountId
   * @return accountId
  **/
  @ApiModelProperty(value = "")
  public String getAccountId() {
    return accountId;
  }

  public void setAccountId(String accountId) {
    this.accountId = accountId;
  }

  public GetOrderResponse accountNo(String accountNo) {
    this.accountNo = accountNo;
    return this;
  }

   /**
   * Get accountNo
   * @return accountNo
  **/
  @ApiModelProperty(value = "")
  public String getAccountNo() {
    return accountNo;
  }

  public void setAccountNo(String accountNo) {
    this.accountNo = accountNo;
  }

  public GetOrderResponse amountCash(Integer amountCash) {
    this.amountCash = amountCash;
    return this;
  }

   /**
   * Get amountCash
   * @return amountCash
  **/
  @ApiModelProperty(value = "")
  public Integer getAmountCash() {
    return amountCash;
  }

  public void setAmountCash(Integer amountCash) {
    this.amountCash = amountCash;
  }

  public GetOrderResponse averagePrice(Double averagePrice) {
    this.averagePrice = averagePrice;
    return this;
  }

   /**
   * Get averagePrice
   * @return averagePrice
  **/
  @ApiModelProperty(value = "")
  public Double getAveragePrice() {
    return averagePrice;
  }

  public void setAveragePrice(Double averagePrice) {
    this.averagePrice = averagePrice;
  }

  public GetOrderResponse created(String created) {
    this.created = created;
    return this;
  }

   /**
   * Get created
   * @return created
  **/
  @ApiModelProperty(value = "")
  public String getCreated() {
    return created;
  }

  public void setCreated(String created) {
    this.created = created;
  }

  public GetOrderResponse createdBy(String createdBy) {
    this.createdBy = createdBy;
    return this;
  }

   /**
   * Get createdBy
   * @return createdBy
  **/
  @ApiModelProperty(value = "")
  public String getCreatedBy() {
    return createdBy;
  }

  public void setCreatedBy(String createdBy) {
    this.createdBy = createdBy;
  }

  public GetOrderResponse cumulativeQuantity(Double cumulativeQuantity) {
    this.cumulativeQuantity = cumulativeQuantity;
    return this;
  }

   /**
   * Get cumulativeQuantity
   * @return cumulativeQuantity
  **/
  @ApiModelProperty(value = "")
  public Double getCumulativeQuantity() {
    return cumulativeQuantity;
  }

  public void setCumulativeQuantity(Double cumulativeQuantity) {
    this.cumulativeQuantity = cumulativeQuantity;
  }

  public GetOrderResponse fees(Double fees) {
    this.fees = fees;
    return this;
  }

   /**
   * Get fees
   * @return fees
  **/
  @ApiModelProperty(value = "")
  public Double getFees() {
    return fees;
  }

  public void setFees(Double fees) {
    this.fees = fees;
  }

  public GetOrderResponse id(String id) {
    this.id = id;
    return this;
  }

   /**
   * Get id
   * @return id
  **/
  @ApiModelProperty(value = "")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }

  public GetOrderResponse orderExpires(String orderExpires) {
    this.orderExpires = orderExpires;
    return this;
  }

   /**
   * Get orderExpires
   * @return orderExpires
  **/
  @ApiModelProperty(value = "")
  public String getOrderExpires() {
    return orderExpires;
  }

  public void setOrderExpires(String orderExpires) {
    this.orderExpires = orderExpires;
  }

  public GetOrderResponse orderNo(String orderNo) {
    this.orderNo = orderNo;
    return this;
  }

   /**
   * Get orderNo
   * @return orderNo
  **/
  @ApiModelProperty(value = "")
  public String getOrderNo() {
    return orderNo;
  }

  public void setOrderNo(String orderNo) {
    this.orderNo = orderNo;
  }

  public GetOrderResponse quantity(Double quantity) {
    this.quantity = quantity;
    return this;
  }

   /**
   * Get quantity
   * @return quantity
  **/
  @ApiModelProperty(value = "")
  public Double getQuantity() {
    return quantity;
  }

  public void setQuantity(Double quantity) {
    this.quantity = quantity;
  }

  public GetOrderResponse side(String side) {
    this.side = side;
    return this;
  }

   /**
   * Get side
   * @return side
  **/
  @ApiModelProperty(value = "")
  public String getSide() {
    return side;
  }

  public void setSide(String side) {
    this.side = side;
  }

  public GetOrderResponse status(String status) {
    this.status = status;
    return this;
  }

   /**
   * Get status
   * @return status
  **/
  @ApiModelProperty(value = "")
  public String getStatus() {
    return status;
  }

  public void setStatus(String status) {
    this.status = status;
  }

  public GetOrderResponse statusMessage(StatusMessage statusMessage) {
    this.statusMessage = statusMessage;
    return this;
  }

   /**
   * Get statusMessage
   * @return statusMessage
  **/
  @ApiModelProperty(value = "")
  public StatusMessage getStatusMessage() {
    return statusMessage;
  }

  public void setStatusMessage(StatusMessage statusMessage) {
    this.statusMessage = statusMessage;
  }

  public GetOrderResponse symbol(String symbol) {
    this.symbol = symbol;
    return this;
  }

   /**
   * Get symbol
   * @return symbol
  **/
  @ApiModelProperty(value = "")
  public String getSymbol() {
    return symbol;
  }

  public void setSymbol(String symbol) {
    this.symbol = symbol;
  }

  public GetOrderResponse totalOrderAmount(Integer totalOrderAmount) {
    this.totalOrderAmount = totalOrderAmount;
    return this;
  }

   /**
   * Get totalOrderAmount
   * @return totalOrderAmount
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalOrderAmount() {
    return totalOrderAmount;
  }

  public void setTotalOrderAmount(Integer totalOrderAmount) {
    this.totalOrderAmount = totalOrderAmount;
  }

  public GetOrderResponse type(String type) {
    this.type = type;
    return this;
  }

   /**
   * Get type
   * @return type
  **/
  @ApiModelProperty(value = "")
  public String getType() {
    return type;
  }

  public void setType(String type) {
    this.type = type;
  }

  public GetOrderResponse userId(String userId) {
    this.userId = userId;
    return this;
  }

   /**
   * Get userId
   * @return userId
  **/
  @ApiModelProperty(value = "")
  public String getUserId() {
    return userId;
  }

  public void setUserId(String userId) {
    this.userId = userId;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    GetOrderResponse getOrderResponse = (GetOrderResponse) o;
    return Objects.equals(this.accountId, getOrderResponse.accountId) &&
        Objects.equals(this.accountNo, getOrderResponse.accountNo) &&
        Objects.equals(this.amountCash, getOrderResponse.amountCash) &&
        Objects.equals(this.averagePrice, getOrderResponse.averagePrice) &&
        Objects.equals(this.created, getOrderResponse.created) &&
        Objects.equals(this.createdBy, getOrderResponse.createdBy) &&
        Objects.equals(this.cumulativeQuantity, getOrderResponse.cumulativeQuantity) &&
        Objects.equals(this.fees, getOrderResponse.fees) &&
        Objects.equals(this.id, getOrderResponse.id) &&
        Objects.equals(this.orderExpires, getOrderResponse.orderExpires) &&
        Objects.equals(this.orderNo, getOrderResponse.orderNo) &&
        Objects.equals(this.quantity, getOrderResponse.quantity) &&
        Objects.equals(this.side, getOrderResponse.side) &&
        Objects.equals(this.status, getOrderResponse.status) &&
        Objects.equals(this.statusMessage, getOrderResponse.statusMessage) &&
        Objects.equals(this.symbol, getOrderResponse.symbol) &&
        Objects.equals(this.totalOrderAmount, getOrderResponse.totalOrderAmount) &&
        Objects.equals(this.type, getOrderResponse.type) &&
        Objects.equals(this.userId, getOrderResponse.userId);
  }

  @Override
  public int hashCode() {
    return Objects.hash(accountId, accountNo, amountCash, averagePrice, created, createdBy, cumulativeQuantity, fees, id, orderExpires, orderNo, quantity, side, status, statusMessage, symbol, totalOrderAmount, type, userId);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class GetOrderResponse {\n");
    
    sb.append("    accountId: ").append(toIndentedString(accountId)).append("\n");
    sb.append("    accountNo: ").append(toIndentedString(accountNo)).append("\n");
    sb.append("    amountCash: ").append(toIndentedString(amountCash)).append("\n");
    sb.append("    averagePrice: ").append(toIndentedString(averagePrice)).append("\n");
    sb.append("    created: ").append(toIndentedString(created)).append("\n");
    sb.append("    createdBy: ").append(toIndentedString(createdBy)).append("\n");
    sb.append("    cumulativeQuantity: ").append(toIndentedString(cumulativeQuantity)).append("\n");
    sb.append("    fees: ").append(toIndentedString(fees)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    orderExpires: ").append(toIndentedString(orderExpires)).append("\n");
    sb.append("    orderNo: ").append(toIndentedString(orderNo)).append("\n");
    sb.append("    quantity: ").append(toIndentedString(quantity)).append("\n");
    sb.append("    side: ").append(toIndentedString(side)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    statusMessage: ").append(toIndentedString(statusMessage)).append("\n");
    sb.append("    symbol: ").append(toIndentedString(symbol)).append("\n");
    sb.append("    totalOrderAmount: ").append(toIndentedString(totalOrderAmount)).append("\n");
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
    sb.append("    userId: ").append(toIndentedString(userId)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}
