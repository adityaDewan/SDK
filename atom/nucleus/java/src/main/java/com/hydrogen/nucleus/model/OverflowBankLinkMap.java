/*
 * Hydrogen Atom API
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.nucleus.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

import java.util.UUID;

/**
 * OverflowBankLinkMap
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-04T05:11:20.520Z")
public class OverflowBankLinkMap {
  @SerializedName("amount")
  private Double amount = null;

  @SerializedName("bank_link_id")
  private UUID bankLinkId = null;

  public OverflowBankLinkMap amount(Double amount) {
    this.amount = amount;
    return this;
  }

   /**
   * amount
   * @return amount
  **/
  @ApiModelProperty(example = "100.5", required = true, value = "amount")
  public Double getAmount() {
    return amount;
  }

  public void setAmount(Double amount) {
    this.amount = amount;
  }

  public OverflowBankLinkMap bankLinkId(UUID bankLinkId) {
    this.bankLinkId = bankLinkId;
    return this;
  }

   /**
   * bankLinkId
   * @return bankLinkId
  **/
  @ApiModelProperty(example = "6e14259a-9a68-4593-9e6d-8fcd0d05cf44", required = true, value = "bankLinkId")
  public UUID getBankLinkId() {
    return bankLinkId;
  }

  public void setBankLinkId(UUID bankLinkId) {
    this.bankLinkId = bankLinkId;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    OverflowBankLinkMap overflowBankLinkMap = (OverflowBankLinkMap) o;
    return Objects.equals(this.amount, overflowBankLinkMap.amount) &&
        Objects.equals(this.bankLinkId, overflowBankLinkMap.bankLinkId);
  }

  @Override
  public int hashCode() {
    return Objects.hash(amount, bankLinkId);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class OverflowBankLinkMap {\n");
    
    sb.append("    amount: ").append(toIndentedString(amount)).append("\n");
    sb.append("    bankLinkId: ").append(toIndentedString(bankLinkId)).append("\n");
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

