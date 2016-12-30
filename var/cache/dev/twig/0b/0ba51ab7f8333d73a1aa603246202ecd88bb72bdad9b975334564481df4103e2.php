<?php

/* compte/new.html.twig */
class __TwigTemplate_2ff824124c9a655ebba3f0d52ee9813c765e5656d064d678887adb9aa561b788 extends Twig_Template
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
        $__internal_f82b451d4263102a4107b2ef7078621ccf050f712d34cfbfb4b4965270580204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82b451d4263102a4107b2ef7078621ccf050f712d34cfbfb4b4965270580204->enter($__internal_f82b451d4263102a4107b2ef7078621ccf050f712d34cfbfb4b4965270580204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_8d435dac4433b4bfb16f253c39a1511894c97e742f8cedd7e800cd8ceb97263c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d435dac4433b4bfb16f253c39a1511894c97e742f8cedd7e800cd8ceb97263c->enter($__internal_8d435dac4433b4bfb16f253c39a1511894c97e742f8cedd7e800cd8ceb97263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82b451d4263102a4107b2ef7078621ccf050f712d34cfbfb4b4965270580204->leave($__internal_f82b451d4263102a4107b2ef7078621ccf050f712d34cfbfb4b4965270580204_prof);

        
        $__internal_8d435dac4433b4bfb16f253c39a1511894c97e742f8cedd7e800cd8ceb97263c->leave($__internal_8d435dac4433b4bfb16f253c39a1511894c97e742f8cedd7e800cd8ceb97263c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a79bc1e1d125ab6d4bd94baae7193c12346cfbd9463b13a8d69322ebeb80637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a79bc1e1d125ab6d4bd94baae7193c12346cfbd9463b13a8d69322ebeb80637->enter($__internal_9a79bc1e1d125ab6d4bd94baae7193c12346cfbd9463b13a8d69322ebeb80637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b95ec41d687ad957d5cfc2830b4ddb4a14bf745f1f8d853ccf76f583cc21f460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95ec41d687ad957d5cfc2830b4ddb4a14bf745f1f8d853ccf76f583cc21f460->enter($__internal_b95ec41d687ad957d5cfc2830b4ddb4a14bf745f1f8d853ccf76f583cc21f460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<br>
        


</div></div></div>


";
        
        $__internal_b95ec41d687ad957d5cfc2830b4ddb4a14bf745f1f8d853ccf76f583cc21f460->leave($__internal_b95ec41d687ad957d5cfc2830b4ddb4a14bf745f1f8d853ccf76f583cc21f460_prof);

        
        $__internal_9a79bc1e1d125ab6d4bd94baae7193c12346cfbd9463b13a8d69322ebeb80637->leave($__internal_9a79bc1e1d125ab6d4bd94baae7193c12346cfbd9463b13a8d69322ebeb80637_prof);

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
        return array (  155 => 75,  147 => 70,  138 => 64,  129 => 58,  119 => 51,  110 => 45,  100 => 38,  90 => 31,  80 => 24,  70 => 17,  65 => 15,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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

", "compte/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
