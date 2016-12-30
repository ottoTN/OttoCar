<?php

/* compte/new.html.twig */
class __TwigTemplate_af9595856b5ab6d21c3f1afb66de5286748cade232cf08e844c13e60904cb497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_661268c092ab08f6d0adec063e3c4d48b7b30f45098bc651ccf5923e54d23f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661268c092ab08f6d0adec063e3c4d48b7b30f45098bc651ccf5923e54d23f13->enter($__internal_661268c092ab08f6d0adec063e3c4d48b7b30f45098bc651ccf5923e54d23f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_dd8df31e711199628f293e7c8645039f91960f507fab230f87908429ea64e291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8df31e711199628f293e7c8645039f91960f507fab230f87908429ea64e291->enter($__internal_dd8df31e711199628f293e7c8645039f91960f507fab230f87908429ea64e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_661268c092ab08f6d0adec063e3c4d48b7b30f45098bc651ccf5923e54d23f13->leave($__internal_661268c092ab08f6d0adec063e3c4d48b7b30f45098bc651ccf5923e54d23f13_prof);

        
        $__internal_dd8df31e711199628f293e7c8645039f91960f507fab230f87908429ea64e291->leave($__internal_dd8df31e711199628f293e7c8645039f91960f507fab230f87908429ea64e291_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ef7cc5eae002419ce4561919075a779de1fa5959b0f6addd82d68f995c7b218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef7cc5eae002419ce4561919075a779de1fa5959b0f6addd82d68f995c7b218->enter($__internal_9ef7cc5eae002419ce4561919075a779de1fa5959b0f6addd82d68f995c7b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08622a57c6c808ab7465da4714610748f0e88ad4a3c3b46f892d16da1ef4226a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08622a57c6c808ab7465da4714610748f0e88ad4a3c3b46f892d16da1ef4226a->enter($__internal_08622a57c6c808ab7465da4714610748f0e88ad4a3c3b46f892d16da1ef4226a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        
        <div class=\"control-group\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinprop", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "C.I.N"));
        echo "
                            <div class=\"controls\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinprop", array()), 'widget', array("attr" => array("class" => "cin")));
        echo "
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomprop", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomprop", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telprop", array()), 'widget', array("attr" => array("class" => "mask-phone span2 mask text ")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseprop", array()), 'widget', array("attr" => array("class" => "span11")));
        echo "
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mailprop", array()), 'widget', array("attr" => array("class" => "span8 email")));
        echo "
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelevoit", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marquevoit", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immatvoit", array()), 'widget', array("attr" => array("class" => "span6 mask-plate")));
        echo "
                            </div>
                        </div>



                         

        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<br>
        


</div></div></div>


";
        
        $__internal_08622a57c6c808ab7465da4714610748f0e88ad4a3c3b46f892d16da1ef4226a->leave($__internal_08622a57c6c808ab7465da4714610748f0e88ad4a3c3b46f892d16da1ef4226a_prof);

        
        $__internal_9ef7cc5eae002419ce4561919075a779de1fa5959b0f6addd82d68f995c7b218->leave($__internal_9ef7cc5eae002419ce4561919075a779de1fa5959b0f6addd82d68f995c7b218_prof);

    }

    public function getTemplateName()
    {
        return "compte/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  147 => 70,  138 => 64,  129 => 58,  119 => 51,  110 => 45,  100 => 38,  90 => 31,  80 => 24,  70 => 17,  65 => 15,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}},{'attr': {'id': 'basic-validate'}},{'attr': {'name' : 'basic-validate'}},{'attr':{'novalidate':'novalidate'}} ) }}
        
        <div class=\"control-group\">
                            {{ form_label(form.cinprop, \"C.I.N\", {'label_attr': {'class': 'control-label'}}) }}
                            <div class=\"controls\">
                              {{ form_widget(form.cinprop, {'attr': {'class': 'cin'}}) }}
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.prenomprop, {'attr': {'class' : 'span6'}},{'attr':{'placeholder': 'First name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.nomprop, {'attr': {'class' : 'span6'}},{'attr':{'placeholder': 'Last name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.telprop, {'attr': {'class' : 'mask-phone span2 mask text '}},{'attr':{'placeholder': '22 33 66 44'}},{'attr':{'id' : 'mask-phone'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.adresseprop, {'attr': {'class' : 'span11'}},{'attr':{'placeholder': '0 Street New York City'} } ) }}
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              {{ form_widget(form.mailprop, {'attr': {'class' : 'span8 email'}},{'attr':{'placeholder': 'example example.com'  }},{'attr':{'id': 'email'}},{'attr': {'name': 'email'} } ) }}
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.modelevoit, {'attr': {'class' : 'span6'} }) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.marquevoit, {'attr': {'class' : 'span6'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.immatvoit, {'attr': {'class' : 'span6 mask-plate'}},{'attr':{'placeholder': 'Plate Number'}},{'attr':{'id': 'mask-plate'} } ) }}
                            </div>
                        </div>



                         

        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    {{ form_end(form) }}

<br>
        


</div></div></div>


{% endblock %}

", "compte/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar-BackEnd\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
