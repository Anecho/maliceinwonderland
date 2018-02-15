@extends('layout')

@section('content')
<style>
h3:hover {cursor:pointer}
</style>
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="bs-component">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">
                                Guild Bank Aid System v0.3
                            </div>
                          <div class="card-body">
                            <h3 data-toggle="collapse" data-target="#whyGBAS" aria-expanded="false" aria-controls="whyGBAS">
                              1. Why would we need GBAS in first place? <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="whyGBAS">
                              <p>
                                <ol>
                                  <li>What is required for guild? – Raiding.</li>
                                  <li>What is required for raiding? – Players.</li>
                                  <li>What is required for players? – Gear and progress.</li>
                                  <ul>
                                    <li>Gear requires – Enchants, gems, etc.</li>
                                    <li>Progress requires – Flasks/potions, feasts, flares/smoke grenades, repair bots etc.</li>
                                  </ul>
                                </ol>
                                <p>Guild should be able to provide all of this, and the system shows how to.</p>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#concept" aria-expanded="false" aria-controls="concept">
                              2. The concept <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="concept">
                              <p>
                                <ol>
                                    <li>Guild bank should consist of only truly necessary items, which are Best In Slot and are worth using in raid without being blamed at slacking. Other PvP/RP/fun crap should be vendored/AH and gained gold added to guilds budget.</li>
                                    <li>Items kept in the guild bank should always be stacked at some minimum quantity <small>(to determine minimum amounts we need to gather information on how much we spend on average raiding week)</small></li>
                                    <li>Members should receive all the necessary:</li>
                                    <ul>
                                      <li><u>consumables</u> - after clearing trash till 1st boss,</li>
                                      <li><u>enchants/gems</u> - after the raid, for those who stayed till the end.</li>
                                    </ul>
                                    <li>To avoid ninjas all withdrawals should only be managed by rank “bank manager” or higher. Also aid system should <u>apply only</u> for actually upgraded items for raiding spec. So that guild as a whole benefits from each item/enchant given to guild members. Also guild ranks should be used to determine what player gets, and at what cost.</li>
                                    <li><small>***Rank names are just for the idea, they can be named anyhow.</small></li>
                                    <ul>
                                      <li>None – <small><i>being tested in raids for efficiency (divided by gearscore), talents, rotation, etc.</i></small> Gets <u>no advantages</u> because first full set of enchants and gems should be prepared by themselves.</li>
                                      <li>Basic – <small><i>are ready for raids and fully enchanted but still are bad; wrong rotation, don’t know the tactics, regularly slacking or not active at all.</i></small> Can <u>benefit</u> from guilds aid system, but <u>for some fixed price</u> <small>(e.g. AH price -10%; Guilds budget should not suffer much from effortless people)</small></li>
                                      <li>Full – <small><i>Fully legit raider, doing best he can according to his GS, knows tactics, and is loyal.</i></small> <u>Benefit</u> from aid system <u>at no cost</u>.</li>
                                      <li>Advanced – <small><i>Players that stand out more then the others; are helping guild in some way or idk.</i></small> <u>Fully benefit</u> and can get enchants/gems also for <u>pvp specs/alts</u> or something like that.</li>
                                      <li>Officers and higher - Obvious.</li>
                                    </ul>
                                </ol>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#benefits" aria-expanded="false" aria-controls="benefits">
                              3. Benefits <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="benefits">
                              <p>
                                <ul>
                                  <li>Will increase prestige of the guild. ^^
                                  <li>Members being always instantly enchanted and gemmed after getting a new item in raid will
                                  <ul>
                                    <li>obviously increase efficiency of our time spent at the computer.</li>
                                    <li>decrease time spent on looking for an enchanter/jewelcrafter or buying overpriced items on AH or even worse coming to raid un-enchanted at all.</li>
                                    <li>motivate to stay untill the end of the raid time, to get enchants after that</li>
                                  </ul>
                                  <li>Having everyone use flasks and potions on each try will increase productivity and possibility of progress.</li>
                                  <li>No more time consuming farming of herbs/ores/leather/eternals etc. Selling BoEs that drop while we are raiding anyway will pay off bought ingredients from AH.</li>
                                  <li>Time, time and time again..</li>
                                </ul>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#requirements" aria-expanded="false" aria-controls="requirements">
                              4. Implementation requirements <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="requirements">
                              <p>
                                To implement such aid system guild will have to earn for a living and get constant donations from members
                                <ol>
                                  <li>Selling BoE epics from raid drops and crafted end game pattern gear. <small>unless they are BiS for someone in that raid. I would not prefer to keep those in bank and then just give away to people who have not even raided yet. In fact, it can be replaced after few raids and then just vendored for few golds, while selling it on AH for thousands of gold would drastically increase possibility to buy ingredients for everyday consumables for whole raid</small></li>
                                <li>Some dedicated crafters that will convert donated/bought ingredients into BiS enchants for every class and every item slot. Same persons should get profession patterns/recipes that drop in raids, and craft those for guild income as well. Orbs from raids should be kept in guild bank, and crafting choice should be based on current AH prices of items that require same ingredients to craft.</li>
                                <li>Some officers responsible for giving away consumables each raid run.</li>
                                <li>For the beginning, to start off, probably there should be implemented some minimum donation quota of items per week to benefit from aid system, or equivalent amount of gold. How much exactly – should be calculated as (amount used per week) &divide; (active members that benefit from system). <span class="text-danger">When the guild will have steady income from selling BoE/crafts – <u>quota should be removed</u> completely</span>, and occasional donations would be enough. What items should be donated will be mentioned in bank tabs organization section.</li>
                                </ol>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#banktabs" aria-expanded="false" aria-controls="banktabs">
                              5. Detailed guild bank tabs organization <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="banktabs">
                              <p>
                                <table class="table table-sm">
                                  <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Description</th>
                                  </tr>
                                  <tr>
                                    <td>I</td>
                                    <td>Donations</td>
                                    <td>Most required donation item ingredients to be used by Guild Bank Aid System</td>
                                  </tr>
                                  <tr>
                                    <td>II</td>
                                    <td>Ingredients</td>
                                    <td>End game mats used by different professions for BiS enchants/consumables</td>
                                  </tr>
                                  <tr>
                                    <td>III</td>
                                    <td>Farmable items</td>
                                    <td>Items used for enchants and consumables that must be farmed from mobs</td>
                                  </tr>
                                  <tr>
                                    <td>IV</td>
                                    <td>Consumables</td>
                                    <td>Flasks, potions, elixirs and food ready to use</td>
                                  </tr>
                                  <tr>
                                    <td>V</td>
                                    <td>Gems &amp; Enchants</td>
                                    <td>Stacks of uncut gems, and ready to use item enchants</td>
                                  </tr>
                                  <tr>
                                    <td>VI</td>
                                    <td>Budget</td>
                                    <td>BoE / Crafts, other donated stuff to sell for guild budget</td>
                                  </tr>
                                </table>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#enchants" aria-expanded="false" aria-controls="enchants">
                              6. Enchants held stacked in guild bank <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="enchants">
                              <p>
                                <table class="table table-xs">
                                  <tr>
                                    <td>Cloak</td>
                                    <td><a href="https://wotlk.evowow.com/?item=39003">+23 Haste</a></td>
                                    <td>Chest</td>
                                    <td><a href="https://wotlk.evowow.com/?item=44465">+10 Stats</a></td>
                                  </tr>
                                  <tr>
                                    <td>Bracers</td>
                                    <td><a href="https://wotlk.evowow.com/?item=38997">+30 Spellpower</a></td>
                                    <td>Gloves</td>
                                    <td><a href="https://wotlk.evowow.com/?item=38979">+28 Spellpower</a></td>
                                  </tr>
                                  <tr>
                                    <td>Belt</td>
                                    <td><a href="https://wotlk.evowow.com/?item=41611">Eternal Belt Buckle</a></td>
                                    <td>Pants</td>
                                    <td><a href="https://wotlk.evowow.com/?item=41602">Brilliant Spellthread</a></td>
                                  </tr>
                                  <tr>
                                    <td>Boots</td>
                                    <td><a href="https://wotlk.evowow.com/?item=39006">+15 Stamina &amp; run speed</a></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>1H Weapon</td>
                                    <td><a href="https://wotlk.evowow.com/?item=44467">+63 Spellpower</a></td>
                                    <td>2H Weapon</td>
                                    <td><a href="https://wotlk.evowow.com/?item=45056">+81 Spellpower</a></td>
                                  </tr>
                                </table>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#professiondonations" aria-expanded="false" aria-controls="professiondonations">
                              7. List of most required profession items to donate <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="professiondonations">
                              <p>
                                <ul>
<li>Alchemy, transmutation of epic gems, meta diamonds, pygmy oil (ingredients supplied by guild bank)</li>
<li>Blacksmithing, titanium plating & weapon chain, eternal belt buckle</li>
<li>Enchanting supplies, green/blue items lvl74+, scrolls from “List of enchants held in guild bank” above.</li>
<li>Engineering, smoke grenades/flares of different colors, army knifes.</li>
<li>Herbalism, frost lotus, ice thorn, lichbloom, goldclover, adders tongue (also herbs for scribe inks)</li>
<li>Inscription, armor & weapon vellum III. (glyphs only on request, there are just too many of them)</li>
<li>Jewelcrafting, Icy Prism, epic > blue > green uncut northrend gems, Dragon’s Eye. (uncuts do stack)</li>
<li>Leatherworking, Frosthide Leg Armor, Icescale Leg Armor</li>
<li>Tailoring, Brilliant and Spellthread, Moonshroud, Spellweave, Ebonweave</li>
<li>Mining, preferably ores, not bars. (can be smelted if necessary, does not work in oposite direction)</li>
<li>Skinning, arctic fur, nerubian chitin, jormungar scale, icy dragonscale, heavy borean leather</li>
<li>Fishing, pygmy suckerfish, musselback sculpin, glacial salmon, nettlefish, dragonfin angelfish</li>
<li>Cooking, fish feast, northern spices, blackened dragonfin, dragonfin fillet</li>
                                </ul>
                              </p>
                            </div>
                            <h3 data-toggle="collapse" data-target="#farmdonations" aria-expanded="false" aria-controls="farmdonations">
                              8. List of most required farmable items to donate <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="farmdonations">
                              <p>
                                <ul>
                                  <li><a href="https://wotlk.evowow.com/?item=33470">Frostweave cloth</a></li>
                                  <li>All kind of eternals like <a href="https://wotlk.evowow.com/?item=36860">eternals</a> and <a href="https://wotlk.evowow.com/?item=37705">crystallised elements</a></li>
                                  <li><a href="https://wotlk.evowow.com/?item=42253">Iceweb spidersilk</a></li>
                                  <li><a href="https://wotlk.evowow.com/?item=43102">Frozen orb</a></li>
                                </ul>
                              </p>
                          </div>
                          <h3 data-toggle="collapse" data-target="#opentopics" aria-expanded="false" aria-controls="opentopics">
                              9. Open topics <i class="fas fa-angle-down"></i>
                            </h3>
                            <div class="collapse" id="opentopics">
                              <p>
                                <ul>
                                  <li>Guild information, rules and terms. Warnings and following actions.</li>
                                  <li>Raiding - doing it, cool. Some improvements might appear.</li>
                                  <li><s>Players - we are recruiting, cheers. Is it time to make website where recruitment information would appear, like which classes and specs we need, what is our current progress, usual raid setup, etc? As plain and simple as possible, w/o any registrations, forums etc.</s></li>
</li>
                                  <li>Loot distribution. (rolls are for pugs<span id="docs-internal-guid-78e6fcc2-8bba-376a-e824-9e96433fc875"><img src="https://lh4.googleusercontent.com/VKI3Ma75IFWoE4-BXMKRj61Ad0yIjhTwN3n9wdFymOca7D_hjGfY0Ifed4GFAs2tCNOyNvEep6XIOzgjRs0m0-BDEWKB6TAW80V9Hk1jc9e-z-HAhKIpR8n2Thb_Xz07y6SebqMy" width="63" height="63" /></span> )</li> 
                                </ul>
                              </p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
@endsection