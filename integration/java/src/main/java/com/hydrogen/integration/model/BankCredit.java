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
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;

/**
 * BankCredit Object
 */
@ApiModel(description = "BankCredit Object")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class BankCredit {
  @SerializedName("amount")
  private Double amount = null;

  @SerializedName("category")
  private String category = null;

  @SerializedName("description")
  private String description = null;

  @SerializedName("location")
  private Location location = null;

  @SerializedName("memo")
  private String memo = null;

  @SerializedName("merchant")
  private String merchant = null;

  @SerializedName("subcategory")
  private String subcategory = null;

  @SerializedName("transaction_type")
  private String transactionType = null;

  public BankCredit amount(Double amount) {
    this.amount = amount;
    return this;
  }

   /**
   * amount
   * @return amount
  **/
  @ApiModelProperty(example = "30.89", required = true, value = "amount")
  public Double getAmount() {
    return amount;
  }

  public void setAmount(Double amount) {
    this.amount = amount;
  }

  public BankCredit category(String category) {
    this.category = category;
    return this;
  }

   /**
   * category
   * @return category
  **/
  @ApiModelProperty(example = "category", value = "category")
  public String getCategory() {
    return category;
  }

  public void setCategory(String category) {
    this.category = category;
  }

  public BankCredit description(String description) {
    this.description = description;
    return this;
  }

   /**
   * description
   * @return description
  **/
  @ApiModelProperty(example = "description", value = "description")
  public String getDescription() {
    return description;
  }

  public void setDescription(String description) {
    this.description = description;
  }

  public BankCredit location(Location location) {
    this.location = location;
    return this;
  }

   /**
   * Get location
   * @return location
  **/
  @ApiModelProperty(value = "")
  public Location getLocation() {
    return location;
  }

  public void setLocation(Location location) {
    this.location = location;
  }

  public BankCredit memo(String memo) {
    this.memo = memo;
    return this;
  }

   /**
   * memo
   * @return memo
  **/
  @ApiModelProperty(example = "memo", value = "memo")
  public String getMemo() {
    return memo;
  }

  public void setMemo(String memo) {
    this.memo = memo;
  }

  public BankCredit merchant(String merchant) {
    this.merchant = merchant;
    return this;
  }

   /**
   * merchant
   * @return merchant
  **/
  @ApiModelProperty(example = "merchant", required = true, value = "merchant")
  public String getMerchant() {
    return merchant;
  }

  public void setMerchant(String merchant) {
    this.merchant = merchant;
  }

  public BankCredit subcategory(String subcategory) {
    this.subcategory = subcategory;
    return this;
  }

   /**
   * subcategory
   * @return subcategory
  **/
  @ApiModelProperty(example = "subcategory", value = "subcategory")
  public String getSubcategory() {
    return subcategory;
  }

  public void setSubcategory(String subcategory) {
    this.subcategory = subcategory;
  }

  public BankCredit transactionType(String transactionType) {
    this.transactionType = transactionType;
    return this;
  }

   /**
   * transactionType
   * @return transactionType
  **/
  @ApiModelProperty(example = "Credit", required = true, value = "transactionType")
  public String getTransactionType() {
    return transactionType;
  }

  public void setTransactionType(String transactionType) {
    this.transactionType = transactionType;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    BankCredit bankCredit = (BankCredit) o;
    return Objects.equals(this.amount, bankCredit.amount) &&
        Objects.equals(this.category, bankCredit.category) &&
        Objects.equals(this.description, bankCredit.description) &&
        Objects.equals(this.location, bankCredit.location) &&
        Objects.equals(this.memo, bankCredit.memo) &&
        Objects.equals(this.merchant, bankCredit.merchant) &&
        Objects.equals(this.subcategory, bankCredit.subcategory) &&
        Objects.equals(this.transactionType, bankCredit.transactionType);
  }

  @Override
  public int hashCode() {
    return Objects.hash(amount, category, description, location, memo, merchant, subcategory, transactionType);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class BankCredit {\n");
    
    sb.append("    amount: ").append(toIndentedString(amount)).append("\n");
    sb.append("    category: ").append(toIndentedString(category)).append("\n");
    sb.append("    description: ").append(toIndentedString(description)).append("\n");
    sb.append("    location: ").append(toIndentedString(location)).append("\n");
    sb.append("    memo: ").append(toIndentedString(memo)).append("\n");
    sb.append("    merchant: ").append(toIndentedString(merchant)).append("\n");
    sb.append("    subcategory: ").append(toIndentedString(subcategory)).append("\n");
    sb.append("    transactionType: ").append(toIndentedString(transactionType)).append("\n");
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

