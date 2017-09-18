<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_27a3f392007cb87deb163129ba6cca9b35a91e681c4ba2b2fd87bf5359d2e89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eecdb03a5731575163d5920f58f80f38509353eb9b0a12307e6168d0f32b2daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecdb03a5731575163d5920f58f80f38509353eb9b0a12307e6168d0f32b2daa->enter($__internal_eecdb03a5731575163d5920f58f80f38509353eb9b0a12307e6168d0f32b2daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f0b8d5f03186288911264af09bebbea63c10fcb1f99441d44d341e62de9e78b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b8d5f03186288911264af09bebbea63c10fcb1f99441d44d341e62de9e78b8->enter($__internal_f0b8d5f03186288911264af09bebbea63c10fcb1f99441d44d341e62de9e78b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_eecdb03a5731575163d5920f58f80f38509353eb9b0a12307e6168d0f32b2daa->leave($__internal_eecdb03a5731575163d5920f58f80f38509353eb9b0a12307e6168d0f32b2daa_prof);

        
        $__internal_f0b8d5f03186288911264af09bebbea63c10fcb1f99441d44d341e62de9e78b8->leave($__internal_f0b8d5f03186288911264af09bebbea63c10fcb1f99441d44d341e62de9e78b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
